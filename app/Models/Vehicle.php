<?php

namespace App\Models;

use App\Http\Resources\V2\VehicleResource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\ResponseCache\Facades\ResponseCache;

class Vehicle extends Model
{
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['agency_id', 'active', 'agency', 'gtfs_trip', 'route', 'start', 'vehicle', 'lat', 'lon',
                            'trip_id', 'bearing', 'speed', 'stop_sequence', 'status', 'headsign', 'short_name', 'icon',
                            'relationship', 'label', 'plate', 'odometer', 'timestamp', 'congestion', 'occupancy', ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'coordinates' => 'array',
    ];

    /**
     * Get the agency from this vehicle.
     */
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    /**
     * Get the trip from this vehicle.
     */
    public function trip()
    {
        return $this->belongsTo(Trip::class)->withDefault();
    }

    public function links()
    {
        return $this->belongsToMany(Link::class);
    }

    /**
     * Scope a query to only include active agencies.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function toSearchableArray()
    {
        return VehicleResource::make($this)->resolve();
    }

    protected function makeAllSearchableUsing(Builder $query)
    {
        return $query->with(['trip', 'trip.service', 'agency', 'links:id']);
    }

    protected static function booted()
    {
        static::created(function (self $vehicle) {
            $vehicle->icon = $vehicle->agency->vehicles_type;
            $vehicle->links()->attach($vehicle->agency->links->pluck('id'));
            $vehicle->save();
        });

        static::updated(function (self $vehicle) {
            ResponseCache::forget("/v2/vehicles/{$vehicle->id}");
        });
    }
}
