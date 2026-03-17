import './bootstrap'
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.store('cart', {
  offers: [],
  add(offer) { this.offers.push(offer)},
  remove(offer) { this.offers = this.offers.filter(o => o.id !== offer.id)},
  includes(offer) { return this.offers.some(o => o.id === offer.id) },
  addOrRemove(offer) { this.includes(offer) ? this.remove(offer) : this.add(offer) },
  get total() { return this.offers.reduce((sum, offer) => sum + offer.price, 0) },
  get count() { return this.offers.length }
})

Livewire.start()