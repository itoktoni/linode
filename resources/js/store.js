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
        document.body.classList.remove("is-sidebar-open");
      });
    }

    window.addEventListener('changed:breakpoint', () => {
      if(window.innerWidth >= 1300)
      {
        document.body.classList.add("is-sidebar-open");
      }
      else
      {
        document.body.classList.remove("is-sidebar-open");
      }
    })

    window.addEventListener('livewire:navigated', () => {

      const open = document.querySelector('#menu-toggle-open');
      if (open) {
        open.addEventListener('click', function(event) {
          document.body.classList.add("is-sidebar-open");
        });
      }

      const close = document.querySelector('#menu-toggle-close');
      if (close) {
        close.addEventListener('click', function(event) {
          document.body.classList.remove("is-sidebar-open");
        });
      }

    });
  },
});
