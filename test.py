def gen_qr(content):
    import qrcode as qr

    code = qr.make(content)
    code.save(f"./qr.png")

gen_qr("https://rishabhbhasintopic.github.io/DFPRL/")