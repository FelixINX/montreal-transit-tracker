(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{VUzb:function(t,e,n){"use strict";n.r(e);var a=n("j5l6"),o=n.n(a),s=n("pSOK"),r=n("D9m0"),i=n("Yq0q"),c=n("sK+t"),l=n("mdmw"),u=n("gzZi"),v=n("zCDB"),d={name:"TabHome",components:{VContainer:s.a,VRow:r.a,VCol:i.a,VCard:c.a,VCardTitle:l.c,VCardText:l.b,VCardActions:l.a,VBtn:u.a,VChip:v.a},mounted:function(){this.$root.$on("vehiclesUpdated",function(){})},computed:{appVersion:function(){return this.$store.state.settings.version},stateAgencies:function(){return o()(this.$store.state.agencies.data)},stateCounts:function(){return this.$store.state.agencies.counts},counts:function(){var t=this;return o()(this.stateCounts).map(function(e){var n=t.stateAgencies.firstWhere("slug",e.agency),a={};return a.name=n.name,a.backgroundColor=n.color,a.textColor=n.text_color,a.count=e.count,a.secondsAgo=e.diff,a}).all()},totalCount:function(){var t=0;return o()(this.stateCounts).each(function(e){t+=e.count}),t},language:function(){return this.$store.state.settings.language}},watch:{stateCounts:{deep:!0,handler:function(){this.$forceUpdate()}}}},f=(n("bZUu"),n("KHd+")),g=Object(f.a)(d,function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-container",[n("v-row",[n("v-col",{attrs:{cols:"12"}},[n("v-card",{attrs:{color:"accent"}},[n("v-card-title",[t._v(t._s(t.$vuetify.lang.t("$vuetify.home.welcome"))+" "+t._s(t.$vuetify.lang.t("$vuetify.app.name")))]),t._v(" "),n("v-card-text",[t._v(t._s(t.$vuetify.lang.t("$vuetify.home.version"))+" 2.0.0-beta.3+004")]),t._v(" "),n("v-card-actions",[n("v-btn",{attrs:{text:"",href:"https://felixinx.github.io/mtl-gtfs-rt/"}},[t._v(t._s(t.$vuetify.lang.t("$vuetify.home.exitBeta")))])],1)],1)],1),t._v(" "),n("v-col",{attrs:{cols:"12"}},[n("v-card",[n("v-card-title",[t._v("\n                    "+t._s(t.totalCount)+" "+t._s(t.$vuetify.lang.t("$vuetify.home.vehicleTotal"))+"\n                ")]),t._v(" "),n("v-card-text",[n("v-row",t._l(t.counts,function(e){return n("v-col",{key:e.name,staticClass:"count-wrapper",attrs:{cols:"12",md:"4"}},[n("div",{staticClass:"count",style:{borderColor:e.backgroundColor}},[n("div",{staticClass:"text"},[n("span",{staticClass:"md-body-2"},[t._v(t._s(e.name))]),n("br"),t._v(" "),n("span",{staticClass:"md-body-1"},["fr"===t.language?n("span",[t._v("Il y a ")]):t._e(),t._v(" "),e.secondsAgo<60?n("span",[t._v("\n                                            "+t._s(e.secondsAgo)+" "+t._s(t.$vuetify.lang.t("$vuetify.home.secondsAgo"))+"\n                                        ")]):n("span",[t._v("\n                                            "+t._s(Math.floor(e.secondsAgo/60))+" "+t._s(t.$vuetify.lang.t("$vuetify.home.minutesAgo"))+"\n                                        ")]),t._v(" "),e.secondsAgo>300?n("v-chip",{staticClass:"white--text",attrs:{label:"","x-small":"",color:"red"}},[t._v("\n                                            "+t._s(t.$vuetify.lang.t("$vuetify.home.outdated"))+"\n                                        ")]):t._e()],1)]),t._v(" "),n("span",{staticClass:"number",style:{backgroundColor:e.backgroundColor,color:e.textColor}},[t._v(t._s(e.count))])])])}),1)],1)],1)],1),t._v(" "),n("v-col",{attrs:{cols:"12",md:"6"}},[n("v-card",{attrs:{color:"primary",dark:""}},[n("v-card-title",[t._v(t._s(t.$vuetify.lang.t("$vuetify.home.whatsNewTitle")))]),t._v(" "),n("v-card-text",{domProps:{innerHTML:t._s(t.$vuetify.lang.t("$vuetify.home.whatsNewBody"))}})],1)],1),t._v(" "),n("v-col",{attrs:{cols:"12",md:"6"}},[n("v-card",{attrs:{color:"red",dark:""}},[n("v-card-title",[t._v(t._s(t.$vuetify.lang.t("$vuetify.home.communityTitle")))]),t._v(" "),n("v-card-text",{domProps:{innerHTML:t._s(t.$vuetify.lang.t("$vuetify.home.communityBody"))}})],1)],1)],1)],1)},[],!1,null,"56a44ac2",null);e.default=g.exports},bZUu:function(t,e,n){"use strict";var a=n("izKe");n.n(a).a},hsYw:function(t,e,n){(t.exports=n("I1BE")(!1)).push([t.i,".md-card[data-v-56a44ac2] {\n  margin: 16px;\n}\n.count[data-v-56a44ac2] {\n  width: 100%;\n  border-radius: 5px;\n  border-style: solid;\n  border-width: 2px;\n  display: flex;\n}\n.count .text[data-v-56a44ac2] {\n  padding: 2px;\n  flex: 9;\n}\n.count .number[data-v-56a44ac2] {\n  flex: 1;\n  padding-left: 2px;\n  padding-right: 2px;\n  margin-left: 5px;\n  text-align: center;\n  line-height: 50px;\n}",""])},izKe:function(t,e,n){var a=n("hsYw");"string"==typeof a&&(a=[[t.i,a,""]]);var o={hmr:!0,transform:void 0,insertInto:void 0};n("aET+")(a,o);a.locals&&(t.exports=a.locals)}}]);