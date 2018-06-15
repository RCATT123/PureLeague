package com.specifix.pureleagues.view;

import android.content.Context;
import android.support.annotation.Nullable;
import android.util.AttributeSet;

public class SquareImageView extends android.support.v7.widget.AppCompatImageView{


    public SquareImageView(Context context, @Nullable AttributeSet attrs) {
        super(context, attrs);
    }

    @Override
    protected void onMeasure(int widthMeasureSpec, int heightMeasureSpec) {
        super.onMeasure(widthMeasureSpec, widthMeasureSpec);
    }
}
