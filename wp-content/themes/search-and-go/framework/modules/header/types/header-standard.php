<?php
namespace SearchAndGoElated\Modules\Header\Types;

use SearchAndGoElated\Modules\Header\Lib\HeaderType;

/**
 * Class that represents Header Standard layout and option
 *
 * Class HeaderStandard
 */
class HeaderStandard extends HeaderType {
    protected $heightOfTransparency;
    protected $heightOfCompleteTransparency;
    protected $headerHeight;
    protected $mobileHeaderHeight;

    /**
     * Sets slug property which is the same as value of option in DB
     */
    public function __construct() {
        $this->slug = 'header-standard';

        if(!is_admin()) {

            $menuAreaHeight       = search_and_go_elated_filter_px(search_and_go_elated_options()->getOptionValue('menu_area_height_header_standard'));
            $this->menuAreaHeight = $menuAreaHeight !== '' ? (int)$menuAreaHeight : 80;

            $mobileHeaderHeight       = search_and_go_elated_filter_px(search_and_go_elated_options()->getOptionValue('mobile_header_height'));
            $this->mobileHeaderHeight = $mobileHeaderHeight !== '' ? (int)$mobileHeaderHeight : 100;

            add_action('wp', array($this, 'setHeaderHeightProps'));

            add_filter('search_and_go_elated_js_global_variables', array($this, 'getGlobalJSVariables'));
            add_filter('search_and_go_elated_per_page_js_vars', array($this, 'getPerPageJSVariables'));

        }
    }

    /**
     * Loads template file for this header type
     *
     * @param array $parameters associative array of variables that needs to passed to template
     */
    public function loadTemplate($parameters = array()) {

        $parameters['menu_area_in_grid'] = search_and_go_elated_options()->getOptionValue('menu_area_in_grid_header_standard') == 'yes' ? true : false;

        $parameters = apply_filters('search_and_go_elated_header_standard_parameters', $parameters);

        search_and_go_elated_get_module_template_part('templates/types/'.$this->slug, $this->moduleName, '', $parameters);
    }

    /**
     * Sets header height properties after WP object is set up
     */
    public function setHeaderHeightProps(){
        $this->heightOfTransparency         = $this->calculateHeightOfTransparency();
        $this->heightOfCompleteTransparency = $this->calculateHeightOfCompleteTransparency();
        $this->headerHeight                 = $this->calculateHeaderHeight();
        $this->mobileHeaderHeight           = $this->calculateMobileHeaderHeight();
    }

    /**
     * Returns total height of transparent parts of header
     *
     * @return int
     */
    public function calculateHeightOfTransparency() {
        $id = search_and_go_elated_get_page_id();
        $transparencyHeight = 0;

        //Transparency option disabled on listing item archive pages
        if ( ! is_post_type_archive( 'listing-item' ) ) {
            if(get_post_meta($id, 'eltd_menu_area_background_color_header_standard_meta', true) !== ''){
                $menuAreaTransparent = get_post_meta($id, 'eltd_menu_area_background_color_header_standard_meta', true) !== '' &&
                                       get_post_meta($id, 'eltd_menu_area_background_transparency_header_standard_meta', true) !== '1';
            } elseif(search_and_go_elated_options()->getOptionValue('menu_area_background_color_header_standard') == '') {
                $menuAreaTransparent = search_and_go_elated_options()->getOptionValue('menu_area_grid_background_color_header_standard') !== '' &&
                                       search_and_go_elated_options()->getOptionValue('menu_area_grid_background_transparency_header_standard') !== '1';
            } else {
                $menuAreaTransparent = search_and_go_elated_options()->getOptionValue('menu_area_background_color_header_standard') !== '' &&
                                       search_and_go_elated_options()->getOptionValue('menu_area_background_transparency_header_standard') !== '1';
            }


            $sliderExists = get_post_meta($id, 'eltd_page_slider_meta', true) !== '';

            if($sliderExists){
                $menuAreaTransparent = true;
            }

            if($menuAreaTransparent) {
                $transparencyHeight = $this->menuAreaHeight;

                if(($sliderExists && search_and_go_elated_is_top_bar_enabled())
                   || search_and_go_elated_is_top_bar_enabled() &&search_and_go_elated_is_top_bar_transparent()) {
                    $transparencyHeight += search_and_go_elated_get_top_bar_height();
                }
            }
        }

        return $transparencyHeight;
    }

    /**
     * Returns height of completely transparent header parts
     *
     * @return int
     */
    public function calculateHeightOfCompleteTransparency() {
        $id = search_and_go_elated_get_page_id();
        $transparencyHeight = 0;

        if(get_post_meta($id, 'eltd_menu_area_background_color_header_standard_meta', true) !== ''){
            $menuAreaTransparent = get_post_meta($id, 'eltd_menu_area_background_color_header_standard_meta', true) !== '' &&
                                   get_post_meta($id, 'eltd_menu_area_background_transparency_header_standard_meta', true) === '0';
        } elseif(search_and_go_elated_options()->getOptionValue('menu_area_background_color_header_standard') == '') {
            $menuAreaTransparent = search_and_go_elated_options()->getOptionValue('menu_area_grid_background_color_header_standard') !== '' &&
                                   search_and_go_elated_options()->getOptionValue('menu_area_grid_background_transparency_header_standard') === '0';
        } else {
            $menuAreaTransparent = search_and_go_elated_options()->getOptionValue('menu_area_background_color_header_standard') !== '' &&
                                   search_and_go_elated_options()->getOptionValue('menu_area_background_transparency_header_standard') === '0';
        }

        if($menuAreaTransparent) {
            $transparencyHeight = $this->menuAreaHeight;
        }

        return $transparencyHeight;
    }


    /**
     * Returns total height of header
     *
     * @return int|string
     */
    public function calculateHeaderHeight() {
        $headerHeight = $this->menuAreaHeight;
        if(search_and_go_elated_is_top_bar_enabled()) {
            $headerHeight += search_and_go_elated_get_top_bar_height();
        }

        return $headerHeight;
    }

    /**
     * Returns total height of mobile header
     *
     * @return int|string
     */
    public function calculateMobileHeaderHeight() {
        $mobileHeaderHeight = $this->mobileHeaderHeight;

        return $mobileHeaderHeight;
    }

    /**
     * Returns global js variables of header
     *
     * @param $globalVariables
     * @return int|string
     */
    public function getGlobalJSVariables($globalVariables) {
        $globalVariables['eltdLogoAreaHeight'] = 0;
        $globalVariables['eltdMenuAreaHeight'] = $this->headerHeight;
        $globalVariables['eltdMobileHeaderHeight'] = $this->mobileHeaderHeight;

        return $globalVariables;
    }

    /**
     * Returns per page js variables of header
     *
     * @param $perPageVars
     * @return int|string
     */
    public function getPerPageJSVariables($perPageVars) {
        //calculate transparency height only if header has no sticky behaviour
        if(!in_array(search_and_go_elated_options()->getOptionValue('header_behaviour'), array('sticky-header-on-scroll-up','sticky-header-on-scroll-down-up'))) {
            $perPageVars['eltdHeaderTransparencyHeight'] = $this->headerHeight - (search_and_go_elated_get_top_bar_height() + $this->heightOfCompleteTransparency);
        }else{
            $perPageVars['eltdHeaderTransparencyHeight'] = 0;
        }

        return $perPageVars;
    }
}