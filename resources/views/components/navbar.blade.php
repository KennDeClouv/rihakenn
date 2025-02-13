<nav class="nav pointer-events-off">
    <div class="nav-scrolltrigger_embed w-embed">
        <style>
            .nav-scrolltrigger {
                height: calc(100% - 101vh);
            }
        </style>
    </div>
    <div class="w-layout-blockcontainer nav_container w-container">
        <div class="nav_content pointer-events-on">
            <div class="nav-menu">
                <div class="nav-menu_dropdown">
                    <div class="nav-menu_content" style="padding: 30px;">
                        <div class="nav-menu_content-list">
                            <div custom-cursor-trigger="pointer" class="nav-menu_content-spacing"></div>
                            <a custom-cursor-trigger="pointer" href="/" class="nav-link w-inline-block"
                                style="margin-right: auto;">
                                <div class="nav-link_underline-current"></div>
                                <div class="nav-link_content">
                                    <div>Home</div>
                                    <div class="nav-link_underline">
                                        <div class="nav-link_underline-fill"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-menu_content-list">
                            <div custom-cursor-trigger="pointer" class="nav-menu_content-spacing"></div>
                            <a custom-cursor-trigger="pointer" href="{{ route('gallery.index') }}"
                                class="nav-link w-inline-block" style="margin-right: auto;">
                                <div class="nav-link_underline-current"></div>
                                <div class="nav-link_content">
                                    <div>Gallery</div>
                                    <div class="nav-link_underline">
                                        <div class="nav-link_underline-fill"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="nav-menu_content-list">
                            <div custom-cursor-trigger="pointer" class="nav-menu_content-spacing"></div>
                            <a custom-cursor-trigger="pointer" href="{{ route('challenge.index') }}"
                                class="nav-link w-inline-block" style="margin-right: auto;">
                                <div class="nav-link_underline-current"></div>
                                <div class="nav-link_content">
                                    <div>Challenge</div>
                                    <div class="nav-link_underline">
                                        <div class="nav-link_underline-fill"></div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                        <div class="nav-menu_content-list">
                            <div custom-cursor-trigger="pointer" class="nav-menu_content-spacing"></div>
                            <form action="{{ route('logout') }}" method="POST" class="nav-link w-inline-block"
                                style="margin-right: auto;">
                                @csrf
                                <div class="nav-link_underline-current"></div>
                                <div class="nav-link_content">
                                    <button type="submit"
                                        style="background: none; border: none; color: inherit; cursor: pointer; padding: 0;">
                                        <div>LOGOUT</div>
                                        <div class="nav-link_underline">
                                            <div class="nav-link_underline-fill"></div>
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-bar">
                <div class="nav-bar_content">
                    <a custom-cursor-trigger="pointer" href="/" aria-current="page"
                        class="nav-tagline w-inline-block w--current">
                        <div class="">
                            <div class="text-block-13">Kenn & Rihaa</div>
                        </div>
                    </a>
                </div>
                <div custom-cursor-trigger="pointer" class="nav-trigger">
                    <a href="#" class="nav-bar_link w-inline-block">
                        <div class="nav-trigger_track">
                            <div class="nav-bar_link-content is-icon"></div>
                            <div class="nav-bar_link-content">
                                <div class="text-block-11">Menu</div>
                            </div>
                        </div>
                        <div class="nav-bar_divider is-left"></div>
                        <div class="nav-trigger_icon">
                            <div class="nav-trigger_icon-line is-vertical"></div>
                            <div class="nav-trigger_icon-line is-horizontal"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
