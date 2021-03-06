<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FontAwesome_ft extends EE_Fieldtype {

    var $info = array(
        'name'      => 'Font Awesome',
        'version'   => '1.0'
    );

var $fonts = array(
    'glass',
    'music',
    'search',
    'envelope-o',
    'heart',
    'star',
    'star-o',
    'user',
    'film',
    'th-large',
    'th',
    'th-list',
    'check',
    'times',
    'search-plus',
    'search-minus',
    'power-off',
    'signal',
    'gear',
    'cog',
    'trash-o',
    'home',
    'file-o',
    'clock-o',
    'road',
    'download',
    'arrow-circle-o-down',
    'arrow-circle-o-up',
    'inbox',
    'play-circle-o',
    'rotate-right',
    'repeat',
    'refresh',
    'list-alt',
    'lock',
    'flag',
    'headphones',
    'volume-off',
    'volume-down',
    'volume-up',
    'qrcode',
    'barcode',
    'tag',
    'tags',
    'book',
    'bookmark',
    'print',
    'camera',
    'font',
    'bold',
    'italic',
    'text-height',
    'text-width',
    'align-left',
    'align-center',
    'align-right',
    'align-justify',
    'list',
    'dedent',
    'outdent',
    'indent',
    'video-camera',
    'picture-o',
    'pencil',
    'map-marker',
    'adjust',
    'tint',
    'edit',
    'pencil-square-o',
    'share-square-o',
    'check-square-o',
    'arrows',
    'step-backward',
    'fast-backward',
    'backward',
    'play',
    'pause',
    'stop',
    'forward',
    'fast-forward',
    'step-forward',
    'eject',
    'chevron-left',
    'chevron-right',
    'plus-circle',
    'minus-circle',
    'times-circle',
    'check-circle',
    'question-circle',
    'info-circle',
    'crosshairs',
    'times-circle-o',
    'check-circle-o',
    'ban',
    'arrow-left',
    'arrow-right',
    'arrow-up',
    'arrow-down',
    'mail-forward',
    'share',
    'expand',
    'compress',
    'plus',
    'minus',
    'asterisk',
    'exclamation-circle',
    'gift',
    'leaf',
    'fire',
    'eye',
    'eye-slash',
    'warning',
    'exclamation-triangle',
    'plane',
    'calendar',
    'random',
    'comment',
    'magnet',
    'chevron-up',
    'chevron-down',
    'retweet',
    'shopping-cart',
    'folder',
    'folder-open',
    'arrows-v',
    'arrows-h',
    'bar-chart-o',
    'twitter-square',
    'facebook-square',
    'camera-retro',
    'key',
    'gears',
    'cogs',
    'comments',
    'thumbs-o-up',
    'thumbs-o-down',
    'star-half',
    'heart-o',
    'sign-out',
    'linkedin-square',
    'thumb-tack',
    'external-link',
    'sign-in',
    'trophy',
    'github-square',
    'upload',
    'lemon-o',
    'phone',
    'square-o',
    'bookmark-o',
    'phone-square',
    'twitter',
    'facebook',
    'github',
    'unlock',
    'credit-card',
    'rss',
    'hdd-o',
    'bullhorn',
    'bell',
    'certificate',
    'hand-o-right',
    'hand-o-left',
    'hand-o-up',
    'hand-o-down',
    'arrow-circle-left',
    'arrow-circle-right',
    'arrow-circle-up',
    'arrow-circle-down',
    'globe',
    'wrench',
    'tasks',
    'filter',
    'briefcase',
    'arrows-alt',
    'group',
    'users',
    'chain',
    'link',
    'cloud',
    'flask',
    'cut',
    'scissors',
    'copy',
    'files-o',
    'paperclip',
    'save',
    'floppy-o',
    'square',
    'bars',
    'list-ul',
    'list-ol',
    'strikethrough',
    'underline',
    'table',
    'magic',
    'truck',
    'pinterest',
    'pinterest-square',
    'google-plus-square',
    'google-plus',
    'money',
    'caret-down',
    'caret-up',
    'caret-left',
    'caret-right',
    'columns',
    'unsorted',
    'sort',
    'sort-down',
    'sort-asc',
    'sort-up',
    'sort-desc',
    'envelope',
    'linkedin',
    'rotate-left',
    'undo',
    'legal',
    'gavel',
    'dashboard',
    'tachometer',
    'comment-o',
    'comments-o',
    'flash',
    'bolt',
    'sitemap',
    'umbrella',
    'paste',
    'clipboard',
    'lightbulb-o',
    'exchange',
    'cloud-download',
    'cloud-upload',
    'user-md',
    'stethoscope',
    'suitcase',
    'bell-o',
    'coffee',
    'cutlery',
    'file-text-o',
    'building-o',
    'hospital-o',
    'ambulance',
    'medkit',
    'fighter-jet',
    'beer',
    'h-square',
    'plus-square',
    'angle-double-left',
    'angle-double-right',
    'angle-double-up',
    'angle-double-down',
    'angle-left',
    'angle-right',
    'angle-up',
    'angle-down',
    'desktop',
    'laptop',
    'tablet',
    'mobile-phone',
    'mobile',
    'circle-o',
    'quote-left',
    'quote-right',
    'spinner',
    'circle',
    'mail-reply',
    'reply',
    'github-alt',
    'folder-o',
    'folder-open-o',
    'smile-o',
    'frown-o',
    'meh-o',
    'gamepad',
    'keyboard-o',
    'flag-o',
    'flag-checkered',
    'terminal',
    'code',
    'reply-all',
    'mail-reply-all',
    'star-half-empty',
    'star-half-full',
    'star-half-o',
    'location-arrow',
    'crop',
    'code-fork',
    'unlink',
    'chain-broken',
    'question',
    'info',
    'exclamation',
    'superscript',
    'subscript',
    'eraser',
    'puzzle-piece',
    'microphone',
    'microphone-slash',
    'shield',
    'calendar-o',
    'fire-extinguisher',
    'rocket',
    'maxcdn',
    'chevron-circle-left',
    'chevron-circle-right',
    'chevron-circle-up',
    'chevron-circle-down',
    'html5',
    'css3',
    'anchor',
    'unlock-alt',
    'bullseye',
    'ellipsis-h',
    'ellipsis-v',
    'rss-square',
    'play-circle',
    'ticket',
    'minus-square',
    'minus-square-o',
    'level-up',
    'level-down',
    'check-square',
    'pencil-square',
    'external-link-square',
    'share-square',
    'compass',
    'toggle-down',
    'caret-square-o-down',
    'toggle-up',
    'caret-square-o-up',
    'toggle-right',
    'caret-square-o-right',
    'euro',
    'eur',
    'gbp',
    'dollar',
    'usd',
    'rupee',
    'inr',
    'cny',
    'rmb',
    'yen',
    'jpy',
    'ruble',
    'rouble',
    'rub',
    'won',
    'krw',
    'bitcoin',
    'btc',
    'file',
    'file-text',
    'sort-alpha-asc',
    'sort-alpha-desc',
    'sort-amount-asc',
    'sort-amount-desc',
    'sort-numeric-asc',
    'sort-numeric-desc',
    'thumbs-up',
    'thumbs-down',
    'youtube-square',
    'youtube',
    'xing',
    'xing-square',
    'youtube-play',
    'dropbox',
    'stack-overflow',
    'instagram',
    'flickr',
    'adn',
    'bitbucket',
    'bitbucket-square',
    'tumblr',
    'tumblr-square',
    'long-arrow-down',
    'long-arrow-up',
    'long-arrow-left',
    'long-arrow-right',
    'apple',
    'windows',
    'android',
    'linux',
    'dribbble',
    'skype',
    'foursquare',
    'trello',
    'female',
    'male',
    'gittip',
    'sun-o',
    'moon-o',
    'archive',
    'bug',
    'vk',
    'weibo',
    'renren',
    'pagelines',
    'stack-exchange',
    'arrow-circle-o-right',
    'arrow-circle-o-left',
    'toggle-left',
    'caret-square-o-left',
    'dot-circle-o',
    'wheelchair',
    'vimeo-square',
    'turkish-lira',
    'try',
    'plus-square-o'
);


    // --------------------------------------------------------------------

    /**
     * Display Field on Publish
     *
     * @access  public
     * @param   existing data
     * @return  field html
     *
     */
    function display_field($data)
    {
        $this->EE->cp->add_to_head('<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">');
        $this->EE->cp->load_package_js('jquery.autocomplete.min');

        foreach($this->fonts as $val) {
             $fontawesome[] = array('value' => $val);
        }
        $theicons = json_encode($fontawesome);

        $this->EE->javascript->output("
            FAAutocomplete();

            if (typeof(window.Grid) !== 'undefined') {
                Grid.bind('fontawesome','display', function(cell) {
                    FAAutocomplete();
                });
            }

            function FAAutocomplete() {
                $('.fa-autocomplete').autocomplete({
                    width: '400',
                    formatResult : function (suggestion, currentValue) {
                        return '<i class=\"fa fa-'+suggestion.value+'\">&nbsp;<strong>'+suggestion.value+'</strong><\/i>'
                    },
                    lookup: ".$theicons."
                });
            }
        ");
        $this->EE->cp->add_to_head('
            <style type="text/css">
            .autocomplete-suggestions {
                max-height:200px;
                border:1px solid #C5CED4;
                border-top:none;
                overflow:auto;
            }
            .autocomplete-suggestion {
                line-height:24px;
                font-size:16px;
                padding:4px 0 4px 12px;
                background-color:#ECF1F4;
                color:#3E4C54;
                border-bottom:1px solid #C5CED4;
            }
            .autocomplete-suggestion.autocomplete-selected {
               color:#000;
               background-color:#fff;
               cursor:pointer;
            }
            </style>');

        $form = form_input($this->field_name, $data, 'id="'.$this->field_name.'" class="fa-autocomplete"'.'placeholder="type something awesome..."');
        return $form;
    }



    // --------------------------------------------------------------------


    /**
     * Save Settings
     *
     * @access  public
     * @return  field settings
     *
     */
    function save_settings($data)
    {
        return $this->EE->input->post('fonts');
    }

    // --------------------------------------------------------------------

    /**
     * Install Fieldtype
     *
     * @access  public
     * @return  default global settings
     *
     */
    function install()
    {
        return array(
            'fonts'  => ''
        );
    }

    // --------------------------------------------------------------------

    function accepts_content_type($name)
    {
        return ($name == 'channel' || $name == 'grid');
    }

}

/* End of file ft.fontawesome.php */
/* Location: ./system/expressionengine/third_party/fontawesome/ft.fontawesome.php */