@if (session()->has('errors'))
    <x-Alert.Alert class="alert-danger" alertMessage="Não foi possível realizar sua ação" />
@elseif(session()->has('message'))
    <x-Alert.Alert class="alert-success" :alertMessage="session()->get('message')" />
@endif
