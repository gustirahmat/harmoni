<div class="form-group {{ $errors->has('nama_trip') ? 'has-error' : ''}}">
    <label for="nama_trip" class="control-label">{{ 'Nama Trip' }}</label>
    <input class="form-control" name="nama_trip" type="text" id="nama_trip" value="{{ $opentripschedule->nama_trip or ''}}" required>
    {!! $errors->first('nama_trip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kuota_trip') ? 'has-error' : ''}}">
    <label for="kuota_trip" class="control-label">{{ 'Kuota Trip' }}</label>
    <input class="form-control" name="kuota_trip" type="number" id="kuota_trip" value="{{ $opentripschedule->kuota_trip or ''}}" required>
    {!! $errors->first('kuota_trip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_trip') ? 'has-error' : ''}}">
    <label for="tanggal_trip" class="control-label">{{ 'Tanggal Trip' }}</label>
    <input class="form-control" name="tanggal_trip" type="date" id="tanggal_trip" value="{{ $opentripschedule->tanggal_trip or ''}}" required>
    {!! $errors->first('tanggal_trip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lama_trip') ? 'has-error' : ''}}">
    <label for="lama_trip" class="control-label">{{ 'Lama Trip' }}</label>
    <input class="form-control" name="lama_trip" type="text" id="lama_trip" value="{{ $opentripschedule->lama_trip or ''}}" required>
    {!! $errors->first('lama_trip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aktif') ? 'has-error' : ''}}">
    <label for="aktif" class="control-label">{{ 'Aktif' }}</label>
    <div class="radio">
    <label><input name="aktif" type="radio" value="1" {{ (isset($opentripschedule) && 1 == $opentripschedule->aktif) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="aktif" type="radio" value="0" @if (isset($opentripschedule)) {{ (0 == $opentripschedule->aktif) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('aktif', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
