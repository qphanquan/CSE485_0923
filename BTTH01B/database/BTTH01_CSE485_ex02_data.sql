CREATE TABLE tacgia(
	ma_tgia int unsigned not null PRIMARY KEY,
    ten_tgia varchar(100) not null,
    hinh_tgia varchar(100)
);

CREATE TABLE baiviet(
	ma_bviet int unsigned not null PRIMARY KEY,
    tieude varchar(200) not null,
    ten_bhat varchar(100) not null,
    ma_tloai int unsigned not null,
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
    tomtat text not null,
    noidung text,
    ma_tgia int unsigned not null,
    ngayviet datetime not null DEFAULT CURRENT_DATE(),
    hinhanh varchar(200)
);

ALTER TABLE baiviet
ADD FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia);

CREATE TABLE theloai(
	ma_tloai int unsigned not null PRIMARY KEY,
    ten_tloai varchar(50) not null
);


insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (1, 'rstatersfield0', 'wobington0');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (2, 'kswains1', 'klukins1');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (3, 'lprati2', 'ahannan2');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (4, 'wlantaph3', 'hmckerton3');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (5, 'gbrosch4', 'vbartzen4');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (6, 'lcrake5', 'wsmithson5');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (7, 'mmill6', 'cgoning6');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (8, 'bcornilleau7', 'farenson7');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (9, 'mleyman8', 'kturban8');
insert into tacgia (ma_tgia, ten_tgia, hinh_tgia) values (10, 'tmanilo9', 'wdruett9');


insert into theloai (ma_tloai, ten_tloai) values (0, 'Nhạc trữ tình');
insert into theloai (ma_tloai, ten_tloai) values (1, 'bclardge0');
insert into theloai (ma_tloai, ten_tloai) values (2, 'rsiviour1');
insert into theloai (ma_tloai, ten_tloai) values (3, 'hmuckloe2');
insert into theloai (ma_tloai, ten_tloai) values (4, 'dmacnamee3');
insert into theloai (ma_tloai, ten_tloai) values (5, 'sfonzone4');
insert into theloai (ma_tloai, ten_tloai) values (6, 'hdominguez5');
insert into theloai (ma_tloai, ten_tloai) values (7, 'dblackster6');
insert into theloai (ma_tloai, ten_tloai) values (8, 'nfairbank7');
insert into theloai (ma_tloai, ten_tloai) values (9, 'dpitrasso8');
insert into theloai (ma_tloai, ten_tloai) values (10, 'rorridge9');


insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (0, 'mtunesi0', 'jmannie0', 1, 'afaircliff0', 'iothick0', 1, '12/17/2022', 'pauguste0');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (1, 'mtunesi0', 'jmannie0', 1, 'afaircliff0', 'iothick0', 1, '12/17/2022', 'pauguste0');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (2, 'pbarock1', 'bmelding1', 2, 'aguppie1', 'bbeamond1', 2, '11/24/2022', 'ahadwick1');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (3, 'cduffrie2', 'dmalyon2', 3, 'pcohane2', 'jcogzell2', 3, '11/1/2022', 'dfontaine2');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (4, 'jcastletine3', 'gheustace3', 4, 'jsheppard3', 'whuckin3', 4, '11/16/2022', 'ccreech3');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (5, 'godonohue4', 'jryding4', 5, 'memson4', 'fleakner4', 5, '1/3/2023', 'cpideon4');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (6, 'ocoulthard5', 'cbenning5', 6, 'tjoncic5', 'amarrill5', 6, '8/9/2023', 'imunks5');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (7, 'gluke6', 'cfarnin6', 7, 'klaughlan6', 'okeirl6', 7, '12/28/2022', 'eallcoat6');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (8, 'bsneezem7', 'mgorick7', 8, 'hdizlie7', 'ctunnadine7', 8, '10/10/2022', 'slethbrig7');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (9, 'jkobierra8', 'hphizacklea8', 9, 'rpiatkow8', 'ttyrrell8', 9, '10/14/2022', 'kwyd8');
insert into baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) values (10, 'uglasby9', 'zbartrop9', 10, 'ktowe9', 'jchastagnier9', 10, '1/11/2023', 'feastcourt9');
