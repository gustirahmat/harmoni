<div class="form-group {{ $errors->has('nama_tamu') ? 'has-error' : ''}}">
    <label for="nama_tamu" class="control-label">{{ 'Nama Tamu' }}</label>
    <input class="form-control" name="nama_tamu" type="text" id="nama_tamu" value="{{ $testimony->nama_tamu ?? ''}}" required>
    {!! $errors->first('nama_tamu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('testimoni') ? 'has-error' : ''}}">
    <label for="testimoni" class="control-label">{{ 'Testimoni' }}</label>
    <textarea class="form-control" rows="5" name="testimoni" type="textarea" id="testimoni" required>{{ $testimony->testimoni ?? ''}}</textarea>
    {!! $errors->first('testimoni', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_trip') ? 'has-error' : ''}}">
    <label for="tanggal_trip" class="control-label">{{ 'Tanggal Trip' }}</label>
    <input class="form-control" name="tanggal_trip" type="date" id="tanggal_trip" value="{{ $testimony->tanggal_trip ?? ''}}" required>
    {!! $errors->first('tanggal_trip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('domisili_tamu') ? 'has-error' : ''}}">
    <label for="domisili_tamu" class="control-label">{{ 'Domisili Tamu' }}</label>
    <input class="form-control" name="domisili_tamu" type="text" id="domisili_tamu" value="{{ $testimony->domisili_tamu ?? ''}}" required>
    {!! $errors->first('domisili_tamu', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
