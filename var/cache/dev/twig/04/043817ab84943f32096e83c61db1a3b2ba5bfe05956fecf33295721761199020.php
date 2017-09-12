<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1cec2e73f6703f2ee777bea2a830ce55d050f56bfd7489670bbb1c6dc4c6d03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e46dc6635aac1f4df253b8c9d0726f34e35771da876febe4a1f31dac8013add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e46dc6635aac1f4df253b8c9d0726f34e35771da876febe4a1f31dac8013add->enter($__internal_8e46dc6635aac1f4df253b8c9d0726f34e35771da876febe4a1f31dac8013add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_0d24a4852341cd71d5b617277c51d7a543d1021eb9cd1f89c10c16bd12aae80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d24a4852341cd71d5b617277c51d7a543d1021eb9cd1f89c10c16bd12aae80d->enter($__internal_0d24a4852341cd71d5b617277c51d7a543d1021eb9cd1f89c10c16bd12aae80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e46dc6635aac1f4df253b8c9d0726f34e35771da876febe4a1f31dac8013add->leave($__internal_8e46dc6635aac1f4df253b8c9d0726f34e35771da876febe4a1f31dac8013add_prof);

        
        $__internal_0d24a4852341cd71d5b617277c51d7a543d1021eb9cd1f89c10c16bd12aae80d->leave($__internal_0d24a4852341cd71d5b617277c51d7a543d1021eb9cd1f89c10c16bd12aae80d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b499e77017da77715488594ac791ffe88b3a0edd077adb40ee4b36ed28d19454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b499e77017da77715488594ac791ffe88b3a0edd077adb40ee4b36ed28d19454->enter($__internal_b499e77017da77715488594ac791ffe88b3a0edd077adb40ee4b36ed28d19454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_014a7a63a46dc730b5352aa38a18f944a5d215ebb6976a2a140ec4d8b6957c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014a7a63a46dc730b5352aa38a18f944a5d215ebb6976a2a140ec4d8b6957c32->enter($__internal_014a7a63a46dc730b5352aa38a18f944a5d215ebb6976a2a140ec4d8b6957c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        // line 8
        echo "
        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>

    ";
        // line 22
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_014a7a63a46dc730b5352aa38a18f944a5d215ebb6976a2a140ec4d8b6957c32->leave($__internal_014a7a63a46dc730b5352aa38a18f944a5d215ebb6976a2a140ec4d8b6957c32_prof);

        
        $__internal_b499e77017da77715488594ac791ffe88b3a0edd077adb40ee4b36ed28d19454->leave($__internal_b499e77017da77715488594ac791ffe88b3a0edd077adb40ee4b36ed28d19454_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c09093afc9917a4436e80b73da903f5c62ea896dfab7bc5ded5631d040c65f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09093afc9917a4436e80b73da903f5c62ea896dfab7bc5ded5631d040c65f8d->enter($__internal_c09093afc9917a4436e80b73da903f5c62ea896dfab7bc5ded5631d040c65f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_affd6ac872930e42eb9b55128aa7573b181b3924e3784b7cd4ca8ee18520a012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affd6ac872930e42eb9b55128aa7573b181b3924e3784b7cd4ca8ee18520a012->enter($__internal_affd6ac872930e42eb9b55128aa7573b181b3924e3784b7cd4ca8ee18520a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_affd6ac872930e42eb9b55128aa7573b181b3924e3784b7cd4ca8ee18520a012->leave($__internal_affd6ac872930e42eb9b55128aa7573b181b3924e3784b7cd4ca8ee18520a012_prof);

        
        $__internal_c09093afc9917a4436e80b73da903f5c62ea896dfab7bc5ded5631d040c65f8d->leave($__internal_c09093afc9917a4436e80b73da903f5c62ea896dfab7bc5ded5631d040c65f8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  105 => 22,  94 => 24,  91 => 22,  86 => 18,  80 => 17,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  52 => 8,  50 => 7,  41 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# On étend notre layout #}
{% extends \"base.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                {% for key, messages in app.session.flashbag.all() %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ key }}\">
                            {{ message|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}


", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
