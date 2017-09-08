<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_359611da0d94e2daab8b0ea7bb030f01709b4015cb9175762b51facb9353d657 extends Twig_Template
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
        $__internal_204de653624a1d66b6ff82592309021df6824af8c3cc653be6a858e835e94986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204de653624a1d66b6ff82592309021df6824af8c3cc653be6a858e835e94986->enter($__internal_204de653624a1d66b6ff82592309021df6824af8c3cc653be6a858e835e94986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_5ba65639f72185a0670f54a6fd69809ed7a78bd49df244f049df6c5626614a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba65639f72185a0670f54a6fd69809ed7a78bd49df244f049df6c5626614a89->enter($__internal_5ba65639f72185a0670f54a6fd69809ed7a78bd49df244f049df6c5626614a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_204de653624a1d66b6ff82592309021df6824af8c3cc653be6a858e835e94986->leave($__internal_204de653624a1d66b6ff82592309021df6824af8c3cc653be6a858e835e94986_prof);

        
        $__internal_5ba65639f72185a0670f54a6fd69809ed7a78bd49df244f049df6c5626614a89->leave($__internal_5ba65639f72185a0670f54a6fd69809ed7a78bd49df244f049df6c5626614a89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
