---
name: WPDev\Facades\OptionsPage
shortName: OptionsPage
namespace: WPDev\Facades
methods:
    -
        name: __construct
        summary: 'Constructor. For a more fluid syntax use <code>OptionsPage::create()</code>.'
        description: ''
        visibility: public
        args:
            -
                name: page_title
                description: 'The title of the page. By default this will also be used as the menu title and the page slug (a slugified version of course).'
                type: string
    -
        name: contentCallback
        summary: 'Set the page content callback.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: callback
                description: 'The callback in charge of generating the content for the page.'
                type: callable
    -
        name: capability
        summary: 'The capability required for this menu to be displayed to the user.'
        description: 'You still need to check for the correct capability in the content callback.'
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: capability
                description: ''
                type: string
    -
        name: create
        summary: 'Allows for more fluid syntax.'
        description: ''
        visibility: public
        static: true
        return:
            type: $this
            description: ''
        args:
            -
                name: page_title
                description: 'The title of the page. By default this will also be used as the menu title and the page slug (a slugified version of course).'
                type: string
    -
        name: menuIcon
        summary: 'Set the menu icon.'
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
        name: menuSlug
        summary: 'Set the slug for the page.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: menu_slug
                description: ''
                type: string
    -
        name: menuTitle
        summary: 'Sets the menu title.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: menu_title
                description: ''
                type: string
    -
        name: parentSlug
        summary: 'Sets the parent slug. Used to make this page a child page.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: slug
                description: 'The slug of the parent page.'
                type: string
                default: options-general.php
    -
        name: position
        summary: 'Sets the position of the menu item.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: position
                description: ''
                type: int
                default: 100
    -
        name: register
        summary: 'Registers the page with WP. Hooks and all.'
        description: ''
        visibility: public
    -
        name: registerManually
        summary: 'Registers the page but not within the appropriate hook <code>admin_menu</code>.'
        description: ''
        visibility: public
    -
        name: sampleCallback
        summary: 'A sample page callback. You should be setting your own callback via <code>contentCallback()</code>.'
        description: 'https://codex.wordpress.org/Creating_Options_Pages#Opening_the_Page'
        visibility: public
    -
        name: topLevel
        summary: 'Make the page top level.'
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

---