<?php
/*
Plugin Name: Plugin Pendaftaran Santri
Description: Formulir pendaftaran santri online.
Version: 1.0
Author: OpenAI
*/

add_shortcode('form_pendaftaran', function() {
    return '<form><input type="text" placeholder="Nama Santri"><br><input type="submit" value="Daftar"></form>';
});
