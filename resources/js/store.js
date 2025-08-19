export default () => ({
  isMonochromeModeEnabled: false,
  isSearchbarActive: false,
  isSidebarExpanded: true,
  isRightSidebarExpanded: false,

  init() {

    if(window.innerWidth >= 1300)
    {
       document.body.classList.add("is-sidebar-open");
    }
    else
    {
      document.body.classList.remove("is-sidebar-open");
    }

    const open = document.querySelector('#menu-toggle-open');
    if (open) {
      open.addEventListener('click', function(event) {
        document.body.classList.add("is-sidebar-open");
      });
    }

    const close = document.querySelector('#menu-toggle-close');
    if (close) {
      close.addEventListener('click', function(event) {
        console.log('close');
        document.body.classList.remove("is-sidebar-open");
      });
    }

    window.addEventListener('livewire:navigated', (e) => {

      const open = document.querySelector('#menu-toggle-open');
      if (open) {
        open.addEventListener('click', function(event) {
          document.body.classList.add("is-sidebar-open");
          return;
        });
      }

      const close = document.querySelector('#menu-toggle-close');
      if (close) {
        close.addEventListener('click', function(event) {
          document.body.classList.remove("is-sidebar-open");
          return;
        });
      }

      const navigates = document.querySelectorAll('.menu-group');
       navigates.forEach(navigate => {
          navigate.addEventListener("click", function(event) {
            if(window.innerWidth <= 750)
            {
              return;
            }
          });
      });

    });
  },
});
