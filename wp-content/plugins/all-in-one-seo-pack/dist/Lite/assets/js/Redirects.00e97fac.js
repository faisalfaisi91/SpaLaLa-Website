import{C as n}from"./Index.fa02c77a.js";import{C as o}from"./Blur.f36c594d.js";import{C as i}from"./Card.72525ad5.js";import{C as a}from"./Table.8c51f443.js";import{n as s}from"./_plugin-vue2_normalizer.61652a7c.js";import{C as l}from"./Index.fa79d954.js";import{R as c}from"./RequiredPlans.bfdab808.js";const u={components:{CoreAddRedirection:n,CoreBlur:o,CoreCard:i,CoreWpTable:a},props:{noCoreCard:Boolean},data(){return{strings:{addNewRedirection:this.$t.__("Add New Redirection",this.$td),searchUrls:this.$t.__("Search URLs",this.$td)},bulkOptions:[{label:"",value:""}]}},computed:{columns(){return[{slug:"source_url",label:this.$t.__("Source URL",this.$td)},{slug:"target_url",label:this.$t.__("Target URL",this.$td)},{slug:"hits",label:this.$t.__("Hits",this.$td),width:"97px"},{slug:"type",label:this.$t.__("Type",this.$td),width:"100px"},{slug:"group",label:this.$t.__("Group",this.$td),width:"150px"},{slug:"enabled",label:this.$constants.GLOBAL_STRINGS.enabled,width:"80px"}]},additionalFilters(){return[{label:this.$t.__("Filter by Group",this.$td),name:"group",options:[{label:this.$t.__("All Groups",this.$td),value:"all"}].concat(this.$constants.REDIRECT_GROUPS)}]}}};var d=function(){var t=this,e=t._self._c;return e("div",{staticClass:"aioseo-redirects-blur"},[t.noCoreCard?t._e():e("core-card",{attrs:{slug:"addNewRedirection","header-text":t.strings.addNewRedirection,noSlide:!0}},[e("core-blur",[e("core-add-redirection",{attrs:{type:t.$constants.REDIRECT_TYPES[0].value,query:t.$constants.REDIRECT_QUERY_PARAMS[0].value,slash:!0,case:!0}})],1)],1),t.noCoreCard?e("core-blur",[e("core-add-redirection",{attrs:{type:t.$constants.REDIRECT_TYPES[0].value,query:t.$constants.REDIRECT_QUERY_PARAMS[0].value,slash:!0,case:!0}})],1):t._e(),e("core-blur",[e("core-wp-table",{attrs:{filters:[],totals:{total:0,pages:0,page:1},columns:t.columns,rows:[],"search-label":t.strings.searchUrls,"bulk-options":t.bulkOptions,"additional-filters":t.additionalFilters}})],1)],1)},_=[],p=s(u,d,_,!1,null,null,null,null);const h=p.exports,m={components:{Blur:h,RequiredPlans:c,Cta:l},props:{noCoreCard:Boolean,parentComponentContext:String},data(){return{strings:{ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Redirects",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Redirects are only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),serverRedirects:this.$t.__("Fast Server Redirects",this.$td),automaticRedirects:this.$t.__("Automatic Redirects",this.$td),redirectMonitoring:this.$t.__("Redirect Monitoring",this.$td),monitoring404:this.$t.__("404 Monitoring",this.$td),fullSiteRedirects:this.$t.__("Full Site Redirects",this.$td),siteAliases:this.$t.__("Site Aliases",this.$td),redirectsDescription:this.$t.__("Our Redirection Manager allows you to easily create and manage redirects for your broken links to avoid confusing search engines and users, as well as losing valuable backlinks. It even automatically sends users and search engines from your old URLs to your new ones.",this.$td)}}}};var $=function(){var t=this,e=t._self._c;return e("div",{class:{"aioseo-redirects":!0,"core-card":!t.noCoreCard}},[e("blur",{attrs:{noCoreCard:t.noCoreCard}}),e("cta",{attrs:{"cta-link":t.$links.getPricingUrl("redirects","redirects-upsell",t.parentComponentContext?t.parentComponentContext:null),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("redirects",t.parentComponentContext?t.parentComponentContext:null,"home"),"feature-list":[t.strings.serverRedirects,t.strings.automaticRedirects,t.strings.redirectMonitoring,t.strings.monitoring404,t.strings.fullSiteRedirects,t.strings.siteAliases]},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[e("required-plans",{attrs:{addon:"aioseo-redirects"}}),t._v(" "+t._s(t.strings.redirectsDescription)+" ")]},proxy:!0}])})],1)},g=[],R=s(m,$,g,!1,null,null,null,null);const A=R.exports;export{A as R};
