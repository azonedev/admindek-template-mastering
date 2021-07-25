# Admin Template Mastering with admindek for laravel project

## Installation guide : 
    1. install a new laravel 
    2. copy the admin-assets directory from this repo & paste into YourApplication/public
    3. copy the admin-layouts directory from this repo & paste into YourApplication/resources/views

    Everyting done. Now you can extends the master layouts that on views/admin-layouts

    * To use toaster notification you have to install the package ` https://github.com/brian2694/laravel-toastr `
    * To use datatable as server pagination you have to install the package ` https://github.com/yajra/laravel-datatables `

## Template mastering guide :
    includes:
    ---------
        header : admin.layouts.header
        navbar top : admin.layouts.nav-top
        navbar left : admin.layouts.nav-left
        footer : admin.layouts.footer

    section created : (yield) for this & all sub-templates
    -------------------------------------------------------
        On Master Template : 
            Page header title : page-icon, page-title, page-sub-title
            Page body / Main page content : main-content

        On Header Template : 
            Meta title : page-title
            Extra/Custom CSS for each template : extra-css
        
        On Footer Template :
            Extra/Custom JS for each template : extra-js

Download admindek bootstrap template : https://github.com/baotm/admindek
