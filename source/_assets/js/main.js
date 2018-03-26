import Menu from './inc/menu'
import './inc/prismConfig'

new Menu('.menu-toggle')
    .on('open', () => {
        document.body.classList.add('menu-is-open')
    })
    .on('close', () => {
        document.body.classList.remove('menu-is-open')
    })
