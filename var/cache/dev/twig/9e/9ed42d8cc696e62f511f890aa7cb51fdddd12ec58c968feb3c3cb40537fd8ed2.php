<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a37a29ee30be38c3c73c5bf5d9de342c3fdeabbf7a5ce47c18b6cba310f0c5bf extends Twig_Template
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
        $__internal_50dd29af2d00e7d4d98dc2ef44fda53e18f12e60354d909bf0af64f7f799dfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dd29af2d00e7d4d98dc2ef44fda53e18f12e60354d909bf0af64f7f799dfb9->enter($__internal_50dd29af2d00e7d4d98dc2ef44fda53e18f12e60354d909bf0af64f7f799dfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6c57f4db01c7c29d5d11c7019b0a479085ca0a82fbbc20a9d70ec60da7a26f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c57f4db01c7c29d5d11c7019b0a479085ca0a82fbbc20a9d70ec60da7a26f25->enter($__internal_6c57f4db01c7c29d5d11c7019b0a479085ca0a82fbbc20a9d70ec60da7a26f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_50dd29af2d00e7d4d98dc2ef44fda53e18f12e60354d909bf0af64f7f799dfb9->leave($__internal_50dd29af2d00e7d4d98dc2ef44fda53e18f12e60354d909bf0af64f7f799dfb9_prof);

        
        $__internal_6c57f4db01c7c29d5d11c7019b0a479085ca0a82fbbc20a9d70ec60da7a26f25->leave($__internal_6c57f4db01c7c29d5d11c7019b0a479085ca0a82fbbc20a9d70ec60da7a26f25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
