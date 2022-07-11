

<template>
    <ul class="chat">
        <li class="left clearfix" v-for="notifikasi in notifikasis">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ notifikasi.nama_notifikasi }}
                    </strong>
                </div>
                <p>
                    {{ notifikasi.deskripsi_notifikasi }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
  export default {
    props: ['notifikasis']
  };
</script>