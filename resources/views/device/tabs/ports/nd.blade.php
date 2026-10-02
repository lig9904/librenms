<x-panel>
    <x-slot:slot class="tw:p-0!">
    <table id="ports-arp" class="table table-condensed table-hover table-striped tw:mt-1 tw:mb-0!">
        <thead>
        <tr>
            <th data-column-id="interface">{{ __('Port') }}</th>
            <th data-column-id="mac_address" data-formatter="tooltip">{{ __('MAC Address') }}</th>
            @config('mac_oui.enabled')
                <th data-column-id="mac_oui" data-sortable="false" data-width="150px" data-visible="false" data-formatter="tooltip">{{ __('Vendor') }}</th>
            @endconfig
            <th data-column-id="ipv6_address" data-formatter="tooltip">{{ __('IPv6 Address') }}</th>
            <th data-column-id="remote_device" data-sortable="false">{{ __('Remote Device') }}</th>
            <th data-column-id="remote_interface" data-sortable="false">{{ __('Remote Interface') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach(DeviceCache::getPrimary()->nd as $nd)
            @php $port = PortCache::getByIp($nd->ipv6_address); @endphp
        <tr>
            <td><x-port-link :port="PortCache::get($nd->port_id)" /></td>
            <td>{{ $nd->mac_address }}</td>
            <td>{{ \LibreNMS\Util\Mac::parse($nd->mac_address)->vendor() }}</td>
            <td>{{ \LibreNMS\Util\IPv6::parse($nd->ipv6_address, true)->compressed() }}</td>
            <td><x-device-link :device="$port?->device" /></td>
            <td>@if($port)<x-port-link :port="PortCache::getByIp($nd->ipv6_address)" />@endif</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </x-slot:slot>
</x-panel>
