<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9dc123c13a63e9fd9ec8e052d397a67c657a5317dd9536d15871dfa4d1ca23ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09dff0ce0b05581c95041460081cb3d4e33d42dfb9685e83052e1c9e1cf52c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dff0ce0b05581c95041460081cb3d4e33d42dfb9685e83052e1c9e1cf52c3b->enter($__internal_09dff0ce0b05581c95041460081cb3d4e33d42dfb9685e83052e1c9e1cf52c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d64d990aea1d71417ee5ae99e6056daf7e412780f19934027eb01e11801894c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64d990aea1d71417ee5ae99e6056daf7e412780f19934027eb01e11801894c8->enter($__internal_d64d990aea1d71417ee5ae99e6056daf7e412780f19934027eb01e11801894c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_09dff0ce0b05581c95041460081cb3d4e33d42dfb9685e83052e1c9e1cf52c3b->leave($__internal_09dff0ce0b05581c95041460081cb3d4e33d42dfb9685e83052e1c9e1cf52c3b_prof);

        
        $__internal_d64d990aea1d71417ee5ae99e6056daf7e412780f19934027eb01e11801894c8->leave($__internal_d64d990aea1d71417ee5ae99e6056daf7e412780f19934027eb01e11801894c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
