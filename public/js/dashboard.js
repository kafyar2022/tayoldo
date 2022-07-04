import { toggleDashNav } from './api.js';
import { initTextEdit } from './text.js';

const dashToggleEl = document.querySelector('.dash__btn');
const dashEl = document.querySelector('.dashboard');

dashToggleEl.addEventListener('click', async (evt) => {
  evt.preventDefault();
  await toggleDashNav();
  dashEl.classList.toggle('dashboard--closed');
});

initTextEdit();
