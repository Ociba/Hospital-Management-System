@extends('dashboards.admin_dashboard')

@section('content')

@livewire('admin.patient.book-appointment',['patient_id'=>$patient_id])

@endsection
