<h2><?=$this->lang->line('pages_create_audio_playlist')?></h2>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class=""><a data-toggle="tab" href="#createAudioPlaylistMediaUpload"><?=$this->lang->line('pages_upload_files')?></a></li>
        <li class="active"><a data-toggle="tab" href="#createAudioPlaylistMediaUploadLibrary"><?=$this->lang->line('pages_media_library')?></a></li>
    </ul>

    <div class="tab-content no-padd">
        <div id="createAudioPlaylistMediaUpload" class="tab-pane">
            <div class="drop--files">
                <form id="create_audio_playlist-fileupload" class="form-horizontal" action=""  method="post" enctype="multipart/form-data">
                    <input type="text" name="media_gallery_type" value="3" style="display: none">
                    <input type="text" name="focus_id" value="createAudioPlaylist" style="display: none">
                    <div class="fileupload-input-group">
                        <span class="fileupload-input-group-btn">
                            <div class="fileupload-image-preview-input">
                                <?=$this->lang->line('pages_select_file')?>
                                <input onchange="fileUpload(this);" class="fileupload-event-image" type="file" accept=".mp3,audio/*" name="file"/>
                            </div>
                        </span>
                    </div>
                </form>
                <div class="post--upload--info">
                    <p><?=$this->lang->line('pages_maximum_upload_file_size')?></p>
                </div>
            </div>
        </div>

        <div id="createAudioPlaylistMediaUploadLibrary" class="tab-pane clearfix active">
            <div class="media-library-left pos-rel pull-left">
                <div class="header--select clearfix">
                    <div class="search-box-right pull-right">
                        <form action="#" method="POST">
                            <input type="search" name="media-search" placeholder="<?=$this->lang->line('pages_search_media_items')?>...">
                        </form>
                    </div>
                </div>
                <?php 
                    if(customCompute($media_gallerys_audios)) {
                        echo '<div class="attached-preview">';
                            echo '<ul class="create_video_playlist_type">';
                        foreach ($media_gallerys_audios as $media_gallerys_audio_key => $media_gallerys_audio) {
                ?>       
                            <li class="create_audio_playlist_audio" onclick="getFileInfo(this, 'create_audio_playlist_type', 'audio', 'multi', 'create_audio_playlist_hidden_field', false, 'create_audio_playlist');" id ="<?=$media_gallerys_audio->media_galleryID?>">
                                <div class="thumb">
                                    <i class="fa fa-file-audio-o"></i>
                                </div>
                                <div class="video-title">
                                    <p><?=namesorting($media_gallerys_audio->file_original_name, 50)?></p>
                                </div>
                            </li>
                <?php 
                        }
                            echo '</ul>';  
                        echo '</div>';
                        echo '<input type="text" id="create_audio_playlist_hidden_field" style="display:none">';

                    } else { ?>
                    <div class="drop--files">
                        <form id="create_audio_playlist-fileupload-list" class="form-horizontal" action=""  method="post" enctype="multipart/form-data">
                            <input type="text" name="media_gallery_type" value="3" style="display: none">
                            <input type="text" name="focus_id" value="createAudioPlaylist" style="display: none">
                            <div class="fileupload-input-group">
                                <span class="fileupload-input-group-btn">
                                    <div class="fileupload-image-preview-input">
                                        <?=$this->lang->line('pages_select_file')?>
                                        <input onchange="fileUpload(this);" class="fileupload-event-image" type="file" accept=".mp3,audio/*" name="file"/>
                                    </div>
                                </span>
                            </div>
                        </form>
                        <div class="post--upload--info">
                            <p><?=$this->lang->line('pages_maximum_upload_file_size')?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="media-library-right pull-left">
                <div class="attached-details" id="create_audio_playlist_type">

                </div>
            </div>
        </div>

        <div class="footer--upload">
            <a data-dismiss="modal" id="create_a_new_playlist" onclick="setFileToEditor(this, 'create_audio_playlist_hidden_field', 'create_video_playlist_type');" href="#"><?=$this->lang->line('pages_create_a_new_playlist')?></a>
        </div>
    </div>
</div>