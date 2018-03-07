---
name: WPDev\Models\Post
shortName: Post
namespace: WPDev\Models
methods:
    -
        name: __construct
        summary: 'Constructor. For a more fluid syntax use <code>Post::create()</code>.'
        description: ''
        visibility: public
        args:
            -
                name: post
                description: 'Optional. Post ID or post object. Defaults to global $post.'
                type: int|\WP_Post|null
                default: null
    -
        name: create
        summary: 'Alternative to constructor. For more fluid syntax.'
        description: ''
        visibility: public
        static: true
        return:
            type: $this
            description: ''
        args:
            -
                name: post
                description: 'Optional. Post ID or post object. Defaults to `$GLOBALS[''post'']`.'
                type: int|\WP_Post|null
                default: null
    -
        name: acfField
        summary: 'Uses ACF''s <code>get_field()</code> to fetch a field value.'
        description: ''
        visibility: public
        return:
            type: mixed|null
            description: ''
        args:
            -
                name: selector
                description: 'The field key'
                type: string
            -
                name: format
                description: 'Should ACF format the value for you'
                type: bool
                default: true
    -
        name: acfFields
        summary: 'Uses ACF''s <code>get_fields()</code> to get all custom field values in an associative array.'
        description: ''
        visibility: public
        return:
            type: array
            description: 'Associate array with all custom field values'
        args:
            -
                name: format
                description: 'Whether ACF should format the values.'
                type: bool
                default: true
    -
        name: ancestors
        summary: 'Retrieves the parent posts in direct parent to highest level ancestor order. Each post will be an instance of <code>\WPDev\Models\Post</code>.'
        description: "The direct parent is returned as the first value in the array.\nThe highest level ancestor is returned as the last value in the array."
        visibility: public
        return:
            type: '\WPDev\Models\Post[]'
            description: 'Array of \WPDev\Models\Post objects'
    -
        name: createdDate
        summary: 'The date the post was created.'
        description: ''
        visibility: public
        return:
            type: bool|string
            description: 'The formatted date. False on failure.'
        args:
            -
                name: date_format
                description: 'A date format string. Defaults to `get_option(''date_format'')` date format set in the WP backend.'
                type: string
                default: ''
    -
        name: featuredImage
        summary: 'Get the featured image. Returns an instance of <code>\WPDev\Models\Image</code>.'
        description: ''
        visibility: public
        return:
            type: \WPDev\Models\Image
            description: ''
        args:
            -
                name: size
                description: 'The image size to use.'
                type: string
                default: full
    -
        name: featuredImageId
        summary: 'Get the featured image id.'
        description: ''
        visibility: public
        return:
            type: int
            description: ''
    -
        name: field
        summary: 'Gets a field value using <code>get_post_meta()</code>.'
        description: ''
        visibility: public
        return:
            type: mixed
            description: 'The field value if it exists. Else an empty string if $single_value = true or an empty array if $single_value = false.'
        args:
            -
                name: key
                description: 'The field key (aka meta key).'
                type: string
            -
                name: single_value
                description: 'Whether WP should return the value or the value wrapped in an array.'
                type: bool
                default: true
    -
        name: hasFeaturedImage
        summary: 'Whether the post has a featured image or not.'
        description: ''
        visibility: public
        return:
            type: bool
            description: ''
    -
        name: hasTerm
        summary: 'Checks whether the post has the term. If no arg passed checks if it has any term.'
        description: ''
        visibility: public
        return:
            type: bool
            description: 'True if the current post has any of the given tags (or any tag, if no tag specified).'
        args:
            -
                name: term
                description: 'The term name/term_id/slug or array of them to check for.'
                type: string|int|array
                default: ''
            -
                name: taxonomy_name
                description: 'Taxonomy name'
                type: string
                default: ''
    -
        name: id
        summary: 'Post ID'
        description: ''
        visibility: public
        return:
            type: int
            description: ''
    -
        name: title
        summary: 'Post title'
        description: ''
        visibility: public
        return:
            type: string
            description: ''
    -
        name: url
        summary: 'Post url (aka permalink).'
        description: ''
        visibility: public
        return:
            type: bool|string
            description: ''
    -
        name: content
        summary: 'Same as <code>the_content()</code> except we don''t echo.'
        description: "WP has a <code>get_the_content()</code> that doesn't apply filters or convert\nshortcodes. Inconsistent. Doesn't accept an <code>id</code> or <code>WP_Post</code> object either. Lame.\nRather than duplicating core code here we just capture the output."
        visibility: public
        return:
            type: string
            description: ''
        args:
            -
                name: more_link_text
                description: ''
                type: 'null'
                default: null
            -
                name: strip_teaser
                description: ''
                type: bool
                default: false
    -
        name: excerpt
        summary: 'Post excerpt'
        description: ''
        visibility: public
        return:
            type: string
            description: ''
    -
        name: modifiedDate
        summary: 'The last modified date.'
        description: ''
        visibility: public
        return:
            type: bool|string
            description: ''
        args:
            -
                name: date_format
                description: ''
                type: string
                default: ''
    -
        name: parent
        summary: 'Gets the parent post if any. If so will return a <code>\WPDev\Models\Post</code> object.'
        description: ''
        visibility: public
        return:
            type: bool|\WPDev\Models\Post
            description: ''
    -
        name: parentId
        summary: 'The parent ID if there is a parent. Else 0.'
        description: ''
        visibility: public
        return:
            type: int
            description: ''
    -
        name: postType
        summary: 'The post type'
        description: ''
        visibility: public
        return:
            type: string
            description: ''
    -
        name: status
        summary: 'The current post status'
        description: ''
        visibility: public
        return:
            type: bool|string
            description: ''
    -
        name: taxonomies
        summary: 'The taxonomy names associated with the post.'
        description: ''
        visibility: public
        return:
            type: array
            description: 'Taxonomy names'
    -
        name: terms
        summary: 'Terms for all or a specific associated taxonomy.'
        description: ''
        visibility: public
        return:
            type: array|mixed
            description: ''
        args:
            -
                name: taxonomy_name
                description: ''
                type: 'null'
                default: null
    -
        name: wpPost
        summary: 'The original <code>WP_Post</code> object'
        description: ''
        visibility: public
        return:
            type: \WP_Post|null
            description: ''

---