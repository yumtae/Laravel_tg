import pandas as pd

df = pd.read_csv('./data/LEC_01_data.csv') 



print(df);

print(type(df));

print(type(df.Name));



df_job = df['Job']

print(df_job);



df_country_job = df[ ['Country', 'Job'] ]

print(df_country_job)