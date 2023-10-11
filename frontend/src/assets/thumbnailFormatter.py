from PIL import Image
import glob
import re
import os

for path in glob.glob("thumbnails/*"):
    if not "png" in path:
        img = Image.open(path).convert('RGB')
        number = max(re.findall(r"\d+", path))
        img.save(f"thumbnails/{number}.png", "PNG")
        os.remove(path)