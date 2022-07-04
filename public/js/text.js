import { createElement } from './util.js';

const BtnTemplate = {
  EDIT: '<button class="text-btn text-btn--edit" title="Редактировать"></button>',
};

const TextStyle = {
  HOVER: 'outline: 1px solid red; position: relative;',
  EDIT: 'outline: 1px solid black',
};

const EditText = {
  evt: null,
  element: null,
  caption: null,
  text: null,
  isEditted: false,

  init(evt) {
    if (EditText.evt) {
      EditText.destroy();
    }
    EditText.evt = evt;
    EditText.element = evt.target;
    EditText.caption = evt.target.dataset.text;
    EditText.text = evt.target.textContent;

    HoverText.destroy();
    EditText.element.contentEditable = true;
    EditText.element.removeAttribute('data-text');
    EditText.element.setAttribute('style', TextStyle.EDIT);
    EditText.element.focus();
    document.addEventListener('keydown', EditText.escapeKeydownHandler);
  },

  destroy() {
    EditText.evt = null,
    EditText.element.setAttribute('data-text', EditText.caption);
    EditText.element.contentEditable = false;
    EditText.element.removeAttribute('style');
    EditText.element = null;
    EditText.caption = null;
    EditText.text = null;
    EditText.isEditted = false;
    document.removeEventListener('keydown', EditText.escapeKeydownHandler);
  },

  escapeKeydownHandler(evt) {
    if (evt.key === 'Escape' || evt.key === 'Esc') {
      EditText.destroy();
      document.removeEventListener('keydown', EditText.escapeKeydownHandler);
    }
  },
};

const HoverText = {
  evt: null,
  element: null,
  editBtn: null,

  init(evt) {
    HoverText.evt = evt;
    HoverText.element = evt.target;
    HoverText.editBtn = createElement(BtnTemplate.EDIT);

    HoverText.element.setAttribute('style', TextStyle.HOVER);
    HoverText.element.insertAdjacentElement('beforeend', HoverText.editBtn);

    HoverText.editBtn.addEventListener('click', HoverText.editBtnClickHandler);
    HoverText.element.addEventListener('mouseleave', HoverText.destroy);
    document.body.removeEventListener('mouseover', bodyMouseOverHandler);
  },

  destroy() {
    HoverText.evt = null;
    HoverText.element.removeAttribute('style');
    HoverText.element.removeEventListener('mouseleave', HoverText.destroy);
    HoverText.element = null;
    HoverText.editBtn.remove();
    HoverText.editBtn = null;
    document.body.addEventListener('mouseover', bodyMouseOverHandler);
  },

  editBtnClickHandler() {
    if (!EditText.isEditted) {
      EditText.init(HoverText.evt);
    }
  },
};

function bodyMouseOverHandler(evt) {
  if (evt.target.dataset.text) {
    HoverText.init(evt);
  }
}

export const initTextEdit = () => document.body.addEventListener('mouseover', bodyMouseOverHandler);
