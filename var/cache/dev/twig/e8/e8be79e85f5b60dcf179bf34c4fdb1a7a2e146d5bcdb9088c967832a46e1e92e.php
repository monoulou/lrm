<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c71e011ab152bc77de56294d0edd2a2b4d8dcc8ac64ea7a2fd62363148c24ccc extends Twig_Template
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
        $__internal_523bc2ecf96c7bfa8174281c1e96b7c982c91eef0421a49a121d2490bd943da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523bc2ecf96c7bfa8174281c1e96b7c982c91eef0421a49a121d2490bd943da9->enter($__internal_523bc2ecf96c7bfa8174281c1e96b7c982c91eef0421a49a121d2490bd943da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ffe8e61f1cc61c5c6adda7b4a712939dc85e1ca30226ef44b14cde4eacaf9f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe8e61f1cc61c5c6adda7b4a712939dc85e1ca30226ef44b14cde4eacaf9f77->enter($__internal_ffe8e61f1cc61c5c6adda7b4a712939dc85e1ca30226ef44b14cde4eacaf9f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_523bc2ecf96c7bfa8174281c1e96b7c982c91eef0421a49a121d2490bd943da9->leave($__internal_523bc2ecf96c7bfa8174281c1e96b7c982c91eef0421a49a121d2490bd943da9_prof);

        
        $__internal_ffe8e61f1cc61c5c6adda7b4a712939dc85e1ca30226ef44b14cde4eacaf9f77->leave($__internal_ffe8e61f1cc61c5c6adda7b4a712939dc85e1ca30226ef44b14cde4eacaf9f77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
