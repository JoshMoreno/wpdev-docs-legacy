import Emitter from 'tiny-emitter'

/**
 * @event menu.close When the menu is closing
 * @event menu.open When the menu is opening
 */
class Menu {
    emitter = null
    isOpen = false
    toggles = []
    toggleOpenClass = 'is-opened'

	/**
	 * @param {string} menuToggleSelector
	 */
    constructor(menuToggleSelector) {
        this.emitter = new Emitter()
        this.toggles = [...document.querySelectorAll(menuToggleSelector)]
        this.toggles.forEach(toggle => {
            toggle.addEventListener('click', this.toggle)
        })
    }

    close = () => {
        this.emitter.emit('close')
        this.isOpen = false
        this.toggles.forEach(toggle => {
            toggle.classList.remove(this.toggleOpenClass)
        })
    }

    open = () => {
        this.emitter.emit('open')
        this.isOpen = true
        this.toggles.forEach(toggle => {
            toggle.classList.add(this.toggleOpenClass)
        })
    }

    toggle = () => {
        if (this.isOpen) {
            return this.close()
        }

        return this.open()
    }

    on = (event, callback) => {
        this.emitter.on(event, callback)

        return this
    }

}

export default Menu