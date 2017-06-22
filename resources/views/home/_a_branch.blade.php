<div class="branch">
    <p class="branch-name">
        {{ $companyBranch['name'] }}
    </p>

    <div class="branch-location">
        <div class="location-icon">
            <img src="{{ asset('images/location_symbol.png', true) }}"/>
        </div>

        <div class="location-detail">
            {{ $companyBranch['address'] }}
        </div>
        <div class="clearfix"></div>
    </div>
</div>
