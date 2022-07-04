const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};

const toggleDashNav = () =>
  fetch(`/dashboard/state`)
    .catch((err) => console.error(err));

export { toggleDashNav };
