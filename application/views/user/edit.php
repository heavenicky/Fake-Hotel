<div class="edit">
    <h1>Edit Profile</h1>
</div>
<div class="row">
    <div class="col-lg">
        <?= form_open_multipart('user/edit');?>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
        </div>
    </div>  
        <div class="form-group row">
            <label for="namadepan" class="col-sm-2 col-form-label">Nama Depan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="namadepan" name="namadepan" value="<?= $user['namadepan'] ?>">
        </div>
    </div>
        <div class="form-group row">
            <label for="namabelakang" class="col-sm-2 col-form-label">Nama Belakang</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="namabelakang" name="namabelakang" value="<?= $user['namabelakang'] ?>">
        </div>
    </div>
    <div class="form-group row">
            <label for="password1" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password1" name="password1">
        </div>
    </div>
    <div class="form-group row">
            <label for="password2" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password2" name="password2">
            <?= form_error('password1', ' <i class="text-danger pl-3 float-left">', '</i>'); ?>
        </div>
    </div>
    <div class="form-group row">
            <label for="profilepic" class="col-sm-2 col-form-label">Foto Profile</label>
            <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/images/profile/') . $user['profilepic']; ?>" class="img-thumbnail">
                </div>  
                <div class="col-sm-9">
                    <input type="file" id="profilepic" name="profilepic">
                </div>  
            </div>
            </div>
    </div>
    <div class="form-group row">
        <div class="col-sm">
            <button type="submit" class="btn btn-custom">Edit Profile</button>
        </div>
    </div>
        </form>
    </div>
</div>