import asyncio
import discord
import datetime
import threading
from discord import Member
from discord.ext import commands


client = discord.Client()
activity = discord.Game(name="with the API")


token = "NTc1NTY0NTIyMzU0Mzc2NzI1.XNJz3Q.v_-mtk9bQaDAyiqMmrvH0sAaKDc"


@client.event
async def on_ready():
	print("다음으로 로그인합니다 : ")
	print(client.user.name)
	print(client.user.id)
	print("=============")
	await client.change_presence(status=discord.Status.idle, activity=activity)




@client.event
async def on_message(message):

	channel =  message.channel
	if message.author.bot:
		return None
	

	if message.content == '!커맨드':
		await message.channel.send('답변')

	if message.content.startswith('!현재시간'):
		await message.channel.send(datetime.datetime.now().strftime("%H:%M:%S"))


client.run(token)