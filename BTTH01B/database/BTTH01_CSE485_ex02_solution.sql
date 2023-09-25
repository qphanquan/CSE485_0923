SELECT * from baiviet
LEFT JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai WHERE theloai.ten_tloai = ‘Nhạc Trữ Tình’;


SELECT * from baiviet
LEFT JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia WHERE tacgia.ten_tgia = 'Nhacvietplus';


SELECT * FROM theloai 
LEFT JOIN baiviet on theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_tloai IS null;


SELECT ma_bviet, tieude, ten_bhat, ten_tgia, ten_tloai, ngayviet FROM baiviet
INNER JOIN tacgia on baiviet.ma_tgia = tacgia.ma_tgia
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai


SELECT ten_tloai FROM theloai
INNER JOIN baiviet on baiviet.ma_tloai = theloai.ma_tloai
GROUP by baiviet.ma_tloai
ORDER BY COUNT(theloai.ma_tloai) DESC
LIMIT 1


SELECT ten_tgia, COUNT(tacgia.ma_tgia) FROM tacgia
INNER JOIN baiviet on baiviet.ma_tgia = tacgia.ma_tgia
GROUP by baiviet.ma_tgia
ORDER BY COUNT(tacgia.ma_tgia) DESC
LIMIT 2


SELECT * FROM baiviet 
WHERE baiviet.ten_bhat LIKE '%yêu%' OR baiviet.ten_bhat LIKE '%thương%' OR baiviet.ten_bhat LIKE '%anh%' OR baiviet.ten_bhat LIKE '%em%'


SELECT * FROM baiviet 
WHERE baiviet.ten_bhat LIKE '%yêu%' OR baiviet.ten_bhat LIKE '%thương%' OR baiviet.ten_bhat LIKE '%anh%' OR baiviet.ten_bhat LIKE '%em%' baiviet.tieude LIKE '%yêu%' OR baiviet.tieude LIKE '%thương%' OR baiviet.tieude LIKE '%anh%' OR baiviet.tieude LIKE '%em%'


CREATE VIEW vw_Music AS 
SELECT baiviet.*, ten_tloai, ten_tgia FROM baiviet
INNER JOIN tacgia on baiviet.ma_tgia = tacgia.ma_tgia
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai


DELIMITER //
CREATE PROCEDURE sp_DSBaiViet (IN tentloai VARCHAR(50))
BEGIN
    DECLARE count_baiviet INT;

    SELECT COUNT(*) INTO count_baiviet
    FROM baiviet
    INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
    WHERE theloai.ten_tloai = tentloai;

    IF count_baiviet = 0 THEN
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'Thể loại không tồn tại.';
    ELSE
        SELECT *
        FROM baiviet
        INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
        WHERE theloai.ten_tloai = tentloai;
    END IF;
END //
DELIMITER ;


ALTER TABLE theloai
ADD COLUMN SLBaiViet INT DEFAULT 0;

DELIMITER //
CREATE TRIGGER tg_CapNhatTheLoai
AFTER INSERT ON baiviet
FOR EACH ROW
BEGIN
    UPDATE theloai
    SET SLBaiViet = SLBaiViet + 1
    WHERE ma_tloai = NEW.ma_tloai;
END //
DELIMITER ;


CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(50) NOT NULL,
   password VARCHAR(50) NOT NULL
);
