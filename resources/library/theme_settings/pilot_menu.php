<?php

function pilot_settings_page(){}

function add_pilot_menu_item()
{
	add_menu_page("Pilot Settings", "Pilot Settings", "manage_options", "pilot-settings", "pilot_settings_page", null, 99);
}

add_action("admin_menu", "add_pilot_menu_item");
