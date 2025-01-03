import nltk
from nltk import ngrams

# Đoạn văn bản mẫu
text = "I love Python programming"

# Tokenize thành các từ
words = nltk.word_tokenize(text)

# Tạo bigrams
bigrams = ngrams(words, 2)

# In các bigrams
for bigram in bigrams:
    print(bigram)
