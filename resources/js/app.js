import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../../../../vendor/filament/forms/dist/module.esm'
import ToastComponent from '../../../../../vendor/usernotnull/tall-toasts/dist/js/tall-toasts'

Alpine.data('ToastComponent', ToastComponent)

Alpine.plugin(FormsAlpinePlugin)

window.Alpine = Alpine

Alpine.start()
