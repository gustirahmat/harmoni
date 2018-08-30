<div class="form-group {{ $errors->has('hari') ? 'has-error' : ''}}">
    <label for="hari" class="control-label">{{ 'Hari' }}</label>
    <input class="form-control" name="hari" type="text" id="hari" value="{{ $boatschedule->hari or ''}}" required>
    {!! $errors->first('hari', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_kapal') ? 'has-error' : ''}}">
    <label for="nama_kapal" class="control-label">{{ 'Nama Kapal' }}</label>
    <input class="form-control" name="nama_kapal" type="text" id="nama_kapal" value="{{ $boatschedule->nama_kapal or ''}}" required>
    {!! $errors->first('nama_kapal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lokasi_pelabuhan') ? 'has-error' : ''}}">
    <label for="lokasi_pelabuhan" class="control-label">{{ 'Lokasi Pelabuhan' }}</label>
    <input class="form-control" name="lokasi_pelabuhan" type="text" id="lokasi_pelabuhan" value="{{ $boatschedule->lokasi_pelabuhan or ''}}" required>
    {!! $errors->first('lokasi_pelabuhan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('menuju_karimunjawa') ? 'has-error' : ''}}">
    <label for="menuju_karimunjawa" class="control-label">{{ 'Menuju Karimunjawa' }}</label>
    <input class="form-control" name="menuju_karimunjawa" type="time" id="menuju_karimunjawa" value="{{ $boatschedule->menuju_karimunjawa or ''}}" required>
    {!! $errors->first('menuju_karimunjawa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dari_karimunjawa') ? 'has-error' : ''}}">
    <label for="dari_karimunjawa" class="control-label">{{ 'Dari Karimunjawa' }}</label>
    <input class="form-control" name="dari_karimunjawa" type="time" id="dari_karimunjawa" value="{{ $boatschedule->dari_karimunjawa or ''}}" required>
    {!! $errors->first('dari_karimunjawa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
