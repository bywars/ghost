<?php
    return array(

        //Project Variables
        "project"  => array(
            "cookiePath"        => "./app/Cookies/",
            "licenseKey"        => "mobiltakipciyiz.com",
			"cronJobToken"      => "D92F3-04928-C12D7-AFA8D",
            "onlyHttps"         => true,
            "adminPrefix"       => "/admin",
            "resellerPrefix"    => "/bayi",
            "memberLoginPrefix" => "/giris"
        ),

        //App Variables
        "app"      => array(
            "theme"                 => "default",
            "layout"                => "layout/default",
            "language"              => "en",
            "base_url"              => NULL,
            "handle_errors"         => TRUE,
            "log_errors"            => FALSE,
            "router_case_sensitive" => TRUE
        ),


        //Database Variables
        "database" => array(
            "DefaultConnection" => array(
                //mysql, sqlsrv, pgsql are tested connections and work perfect.
                "driver"   => "mysql",
                "host"     => "localhost",
                "port"     => "3306",
                "name"     => "yorumpan_eli",
                "user"     => "yorumpan_eli",
                "password" => "yorumpan_eli"
            )
        )
    );