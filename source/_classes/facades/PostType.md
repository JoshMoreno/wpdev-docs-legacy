---
name: WPDev\Facades\PostType
shortName: PostType
namespace: WPDev\Facades
methods:
    -
        name: __construct
        summary: 'Constructor. For more fluid syntax use <code>PostType::create()</code>'
        description: ''
        visibility: public
        args:
            -
                name: name
                description: 'The name of the post type. Should be singular.'
                type: string
    -
        name: canExport
        summary: "Whether or not the post_type can be exported\nDefault: true"
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: create
        summary: 'For a more fluid syntax.'
        description: ''
        visibility: public
        static: true
        return:
            type: $this
            description: ''
        args:
            -
                name: name
                description: ''
                type: string
    -
        name: deleteWithUser
        summary: "Whether to delete posts of this type when deleting a user. If true, posts of this type\nbelonging to the user will be moved to trash when then user is deleted. If false, posts\nof this type belonging to the user will not be trashed or deleted. If not set (the default),\nposts are trashed if post_type_supports('author'). Otherwise posts are not trashed or deleted."
        description: 'Default: null'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: deregister
        summary: 'Deregisters the post type.'
        description: ''
        visibility: public
        return:
            type: bool|\WP_Error
            description: ''
    -
        name: hasArchive
        summary: 'Enables post type archives. Will use $post_type as archive slug by default.'
        description: "Note: Will generate the proper rewrite rules if rewrite is enabled.\nAlso use rewrite to change the slug used. If string, it should be translatable."
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: val
                description: ''
                type: bool|string
                default: true
    -
        name: permalinkEPMask
        summary: 'This sets the endpoint mask. However <code>rewrite[''ep_mask'']</code> takes precedence if it''s set there too.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: endpoint
                description: 'Constant preferred to avoid future failure (core updates)'
                type: int
    -
        name: queryVar
        summary: "True (default) will use the post type slug\nFalse disables query_var key use. A post type cannot be loaded at /?{query_var}={single_post_slug}\nA string essentially overrides the post type slug /?{query_var_string}={single_post_slug}"
        description: 'Remember this is for query_vars not for permalink slug.'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: query_var
                description: ''
                type: bool|string
                default: true
    -
        name: registerManually
        summary: 'Use this method if you want to take care of all the hooks.'
        description: ''
        visibility: public
        return:
            type: \WP_Error|\WP_Post_Type
            description: ''
    -
        name: register
        summary: 'Registers the post type. Hooks and all.'
        description: "It uses an anonymous function so if you need to allow other plugins\nto be able to use <code>@see remove_action()</code> then you should use <code>@see registerManually()</code>"
        visibility: public
        return:
            type: $this
            description: ''
    -
        name: registerMetaBoxCB
        summary: 'Provide a callback function that will be called when setting up the meta boxes for the edit form.'
        description: "The callback function takes one argument <code>$post</code>, which contains the <code>WP_Post</code> object for the currently edited post.\nDo remove_meta_box() and add_meta_box() calls in the callback."
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: callback
                description: ''
                type: callable
    -
        name: restBase
        summary: 'The base slug that this post type will use when accessed using the REST API.'
        description: 'Default: $post_type'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: rest_base
                description: ''
                type: string
    -
        name: restControllerClass
        summary: 'An optional custom controller to use instead of <code>WP_REST_Posts_Controller</code>. Must be a subclass of <code>WP_REST_Controller</code>.'
        description: 'Default: WP_REST_Posts_Controller'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: controller
                description: ''
                type: string
                default: WP_REST_Posts_Controller
    -
        name: rewrite
        summary: 'Set the <code>rewrite</code> arg.'
        description: "['slug']         string Customize the permalink structure slug. Defaults to the $post_type value. Should be translatable.\n['with_front']   bool Should the permalink structure be prepended with the front base.\n                 (example: if your permalink structure is /blog/,\n                 then your links will be: false->/news/, true->/blog/news/). Defaults to true\n['feeds']        bool Should a feed permalink structure be built for this post type. Defaults to has_archive value.\n['pages']        bool Should the permalink structure provide for pagination. Defaults to true\n['ep_mask']      const If not specified, then it inherits from permalink_epmask(if permalink_epmask is set),\n                 otherwise defaults to EP_PERMALINK\n                 see @link https://make.wordpress.org/plugins/2012/06/07/rewrite-endpoints-api/\n                 and also @link https://code.tutsplus.com/articles/the-rewrite-api-post-types-taxonomies--wp-25488"
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: val
                description: '(see above)'
                type: array|bool
                default: true
    -
        name: setArg
        summary: 'Set an arg. Can be used to override the defaults.'
        description: "This is just a catch-all. In case there isn't a more semantic\nmethod or if that's just your preference."
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: key
                description: ''
                type: string
                default: ''
            -
                name: val
                description: ''
                type: mixed
                default: ''
    -
        name: showInRest
        summary: 'Whether to expose this post type in the <code>REST API</code>.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: excludeFromSearch
        summary: 'Exclude from search results'
        description: "If you set to true, on the taxonomy page (ex: taxonomy.php)\nWordPress will not find your posts and/or pagination will make 404 error..."
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: hierarchical
        summary: 'Whether the post type is hierarchical (e.g. page).'
        description: "Allows Parent to be specified.\nThe 'supports' parameter should contain 'page-attributes' to show the\nparent select box on the editor page.\n\nNote: this parameter was intended for Pages. Be careful when choosing it\nfor your custom post type - if you are planning to have very many entries\n(say - over 2-3 thousand), you will run into load time issues. With this\nparameter set to true WordPress will fetch all IDs of that particular post\ntype on each administration page load for your post type. Servers with\nlimited memory resources may also be challenged by this parameter being set to true."
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: mapMetaCap
        summary: 'Whether to use the internal default meta capability handling.'
        description: "Note: If set it to false then standard admin role can't edit the posts types.\nThen the edit_post capability must be added to all roles to add or edit the posts types."
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: menuIcon
        summary: 'The menu icon.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: icon
                description: 'name of Dashicon, URL to icon, or base64 encoded svg with fill="black"'
                type: string
                default: ''
    -
        name: menuPosition
        summary: 'The position in the menu order the post type should appear.'
        description: "<code>show_in_menu</code> must be true.\nDefault: defaults to below Comments\n5 - below Posts\n10 - below Media\n15 - below Links\n20 - below Pages\n25 - below comments\n60 - below first separator\n65 - below Plugins\n70 - below Users\n75 - below Tools\n80 - below Settings\n100 - below second separator"
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: position
                description: ''
                type: int
                default: 25
    -
        name: removeSupport
        summary: 'Removes a supports arg. Use this to remove one of the defaults.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: feature
                description: 'The feature to remove.'
                type: int|string
    -
        name: setPluralName
        summary: 'Set the plural name. Useful if simply appending an ''s'' isn''t grammatically correct.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: plural_name
                description: ''
                type: string
                default: ''
    -
        name: public
        summary: 'Sets the <code>public</code> arg.'
        description: "Implies:\nexclude_from_search = false\npublicly_queryable = true\nshow_in_nav_menus = true\nshow_ui = true"
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: publiclyQueryable
        summary: 'Whether queries can be performed on the front end as part of parse_request().'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: showInAdminBar
        summary: 'Whether to make this post type available in the WordPress admin bar.'
        description: 'Default: value of the show_in_menu argument'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: showInMenu
        summary: 'Show this post type in the menu.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: val
                description: "- If string is given it will be a submenu\nif that url exists. Examples: 'tools.php' or 'edit.php?post_type=page';"
                type: bool|string
                default: true
    -
        name: showInNavMenus
        summary: 'Post type is available for selection in navigation menus.'
        description: 'Default: value of public argument'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: showUI
        summary: 'Whether to generate a default UI for managing this post type in the admin.'
        description: 'Default: value of public argument'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: ''
                type: bool
                default: true
    -
        name: setSingularName
        summary: 'Overrides auto generated singular name.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: singular_name
                description: ''
                type: string
                default: ''
    -
        name: supportsAuthor
        summary: 'Support author.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsComments
        summary: 'Support comments.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsCustomFields
        summary: 'Support custom fields.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsEditor
        summary: 'Support editor.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsExcerpt
        summary: 'Support excerpt.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsFeaturedImage
        summary: 'Support featured image (aka thumbnail).'
        description: 'Alias for @see \WPDev\Models\PostType::supportsThumbnail()'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsPageAttributes
        summary: 'Support page attributes.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsPostFormats
        summary: 'Support post formats.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsRevisions
        summary: 'Support revisions.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsThumbnail
        summary: 'Alternative to <code>@see supportsFeaturedImage</code>. Support featured image (aka thumbnail).'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsTitle
        summary: 'Support title.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supportsTrackbacks
        summary: 'Support trackbacks.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: add
                description: 'True (default) to add, False to remove.'
                type: bool
                default: true
    -
        name: supports
        summary: "False can be passed as value instead of an array to\nprevent default (title and editor) behavior"
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: features
                description: ''
                type: array|bool|string
    -
        name: taxonomies
        summary: 'An array of registered taxonomies like category or post_tag that will be used with this post type.'
        description: "This can be used in lieu of calling register_taxonomy_for_object_type() directly.\nCustom taxonomies still need to be registered with register_taxonomy()."
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: taxonomies
                description: ''
                type: array
                default: {  }

---