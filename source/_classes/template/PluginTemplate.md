---
name: WPDev\Template\PluginTemplate
shortName: PluginTemplate
namespace: WPDev\Template
methods:
    -
        name: __construct
        summary: 'Locates and renders a theme template. Falls back to the absolute <code>$file_path</code> passed in.'
        description: ''
        visibility: public
        args:
            -
                name: file_path
                description: 'The absolute path to the file in the plugin. The basename will be used when searching in the themes.'
                type: string
            -
                name: data
                description: 'Data to be passed to the template.'
                type: array
                default: {  }
    -
        name: includeTemplate
        summary: ''
        description: ''
        visibility: public
    -
        name: create
        summary: 'For a more fluid syntax. Alternatively use <code>Template::include()</code> or <code>Template::locate()</code>.'
        description: ''
        visibility: public
        static: true
        return:
            type: $this
            description: ''
        args:
            -
                name: file_name
                description: ''
                type: string
            -
                name: data
                description: ''
                type: array
                default: {  }
    -
        name: getTemplate
        summary: ''
        description: ''
        visibility: public
    -
        name: include
        summary: 'Include a theme template file. Optionally pass data.'
        description: ''
        visibility: public
        static: true
        return:
            type: bool
            description: 'True if successfully included the template. Otherwise, false.'
        args:
            -
                name: file_name
                description: 'The file name of the template.'
                type: string
            -
                name: data
                description: 'Data to be passed to view. Will also be extracted into variables.'
                type: array
                default: {  }
    -
        name: locate
        summary: 'Locates a template file.'
        description: ''
        visibility: public
        static: true
        return:
            type: string
            description: 'The path to the template file. Empty if none found.'
        args:
            -
                name: file_name
                description: ''
                type: string

---