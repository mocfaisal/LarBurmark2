{{-- File Resources --}}
@section('global.resources.head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@endsection

@section('global.resources.footer')
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
@endsection

{{-- Code Resources --}}
@section('global.css.code')
@endsection

@section('global.javascript.code')
    <script>
        // Navbar burger toggle menu
        document.addEventListener('DOMContentLoaded', () => { // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => { // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        });
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab')
            if (tabs === undefined) return
            tabs.forEach((tab) => {
                tab.addEventListener('click', (e) => {
                    // event.currentTarget refers to element on which
                    // the event listener was attached
                    const tabName = e.currentTarget.attributes[1].nodeValue
                    const currentTab = document.querySelector('.tab.is-active')
                    const currentContent = document.getElementById(`${currentTab.id}-content`)
                    const newTab = document.getElementById(tabName)
                    const newTabContent = document.getElementById(`${tabName}-content`)
                    currentTab.classList.remove('is-active')
                    currentContent.classList.add('is-hidden')
                    newTab.classList.add('is-active')
                    newTabContent.classList.remove('is-hidden')
                })
            })
        })
    </script>
@endsection
