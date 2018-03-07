---
name: WPDev\Models\Image
shortName: Image
namespace: WPDev\Models
methods:
    -
        name: __construct
        summary: 'Constructor. For a more fluid syntax use <code>Image::create()</code>.'
        description: ''
        visibility: public
        args:
            -
                name: id
                description: 'The image id'
            -
                name: size
                description: 'The image size'
                type: string
                default: full
    -
        name: __toString
        summary: 'Make it easy to echo it at any time.'
        description: ''
        visibility: public
        return:
            type: string
            description: ''
    -
        name: alt
        summary: 'Get the alt text.'
        description: ''
        visibility: public
        return:
            type: null|string
            description: ''
    -
        name: caption
        summary: 'Get the caption.'
        description: ''
        visibility: public
        return:
            type: bool|string
            description: ''
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
                name: id
                description: 'The image id'
                type: int
            -
                name: size
                description: 'The image size'
                type: string
                default: full
    -
        name: getAttribute
        summary: 'Gets an attribute.'
        description: ''
        visibility: public
        return:
            type: string|null
            description: ''
        args:
            -
                name: attribute
                description: 'The attribute to get'
                type: string
    -
        name: height
        summary: 'Get the height of the image in the current size.'
        description: ''
        visibility: public
        return:
            type: null|string
            description: ''
    -
        name: metadata
        summary: 'Gets the metadata.'
        description: ''
        visibility: public
        return:
            type: array|mixed
            description: ''
    -
        name: removeAttribute
        summary: 'Remove an attribute.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: name
                description: 'The attribute name'
                type: string
    -
        name: setAttribute
        summary: 'Add an attribute.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: name
                description: 'The attribute name'
                type: string
            -
                name: value
                description: 'The value. Null to just output the name.'
                type: string
                default: null
    -
        name: title
        summary: 'Gets the title field. This is not the filename.'
        description: ''
        visibility: public
        return:
            type: null|string
            description: ''
    -
        name: url
        summary: 'Gets the url of the image in the current size.'
        description: ''
        visibility: public
        return:
            type: null|string
            description: ''
    -
        name: width
        summary: 'Gets the width of the image in the current size.'
        description: ''
        visibility: public
        return:
            type: null|string
            description: ''
    -
        name: withCaption
        summary: 'Sets the flag to output with the caption.'
        description: ''
        visibility: public
        return:
            type: $this
            description: ''
        args:
            -
                name: bool
                description: 'Whether to output with the caption or not.'
                type: bool
                default: true

---