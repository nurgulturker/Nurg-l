class LargestOdd: 

	def largestOdd(self, list): 
		
		currO = -1
		for num in list: 
			
			num = int(num) 
			
			if(num % 2 == 1 and num > currO): 
				
				currO = num 

		print("Listedeki en büyük tek sayı ---> ", currO) 

list_num = [0, 1 ,2, 3, 4, 5, 6, 7, 8, 9] 

obj = LargestOdd() 

obj.largestOdd(list_num)
