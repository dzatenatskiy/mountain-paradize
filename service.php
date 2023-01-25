<?php
/**
 * Template Name: Home
 *
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */

get_header(); ?>

<div class="slider owl-carousel">
    <div class="item" style="background-image: url(<?php echo fw_get_db_settings_option('slider_image_1')['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="slider-heading">Организация горных походов по Западному Кавказу</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <p>Поход на гору Большой Тхач через Княжескую поляну</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2">
                    <p>6-8 мая 2017 3 дня</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-5">
                    <a href="#" class="btn btn-default btn-lg">ОТПРАВИТЬ ЗАЯВКУ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url(img/slider-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="slider-heading"><?php echo fw_get_db_settings_option('slider_h1_11'); ?><?php echo fw_get_db_settings_option('slider_h1_12'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <p><?php echo fw_get_db_settings_option('slider_h3_11'); ?><?php echo fw_get_db_settings_option('slider_h3_12'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2">
                    <p>6-8 мая 2017 3 дня</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-5">
                    <a href="#" class="btn btn-default btn-lg">ОТПРАВИТЬ ЗАЯВКУ</a>
                </div>
            </div>
        </div>
    </div>
</div>


