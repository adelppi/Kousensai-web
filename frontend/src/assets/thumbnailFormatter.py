import cv2
import glob
import re
import os

for path in glob.glob("thumbails/*"):
    img = cv2.imread(path)

    number = max(re.findall(r"\d+", path))

    if img.shape[0] > img.shape[1]:
        img_resized = cv2.resize(img, (int(600/img.shape[0]*img.shape[1]), 600))
        cv2.imwrite(f"outputs/{number}.png", img_resized)
        os.remove(path)

    else:
        img_resized = cv2.resize(img, (600, int(600/img.shape[1]*img.shape[0])))
        cv2.imwrite(f"outputs/{number}.png", img_resized)
        os.remove(path)