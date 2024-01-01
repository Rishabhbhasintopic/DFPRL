def gen_qr(content):
    import qrcode as qr

    code = qr.make(content)
    code.save(f"D:/Rishabh\'s DataBase/Projects/HOPE script/DataBase/Images/qr.png")