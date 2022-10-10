@extends('layouts.base')

@section('title')
Hespéris Tamuda
@endsection

@section('body')
<body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">

<section>
    <div class="sp-dropdown sp-dropdown-sub sp-menu-right" style="width: 350px;">
    <div class="sp-dropdown-inner">
        <ul class="sp-dropdown-items">
            <li class="sp-menu-item">
                <a style="text-decoration:none" href="{{URL::to('/fascicule-1-2017')}}">Fascicule 1 (2017)</a>
            </li>
            <li class="sp-menu-item">
                <a style="text-decoration:none" href="{{URL::to('/fascicule-2-2017')}}">Fascicule 2 (2017)</a>
            </li>
            <li class="sp-menu-item">
                <a style="text-decoration:none" href="{{URL::to('/fascicule-3-2017')}}">Fascicule 3 (2017)</a>
            </li>
        </ul>
    </div>
</div>
</section>
</body>
@endsection
