import java.util.*;
class Main
{
	public static void main(String []args)
	{
		Scanner scan = new Scanner(System.in);
		int no = scan.nextInt();
		int arr[] = new int[no];
		for(int i=0; i<no; i++){
			arr[i] = scan.nextInt();
		}
		
		Arrays.sort(arr);
		for(int i=no-1; i>=0; i--){
			int num = arr[i];
			int temp = num;
			int ans=0;
			while(num > 0){
				int r  = num%10;
				ans  = ans*10+r;
				num=num/10;
			}
			if(temp == ans){
				System.out.println(ans);
				break;
			}
			
		}
	}
}
