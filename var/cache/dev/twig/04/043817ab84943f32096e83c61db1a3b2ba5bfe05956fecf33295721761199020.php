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
        $__internal_2922a47682a32267f755152b9ee6758f5a6a9921d394240108cffca455542b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2922a47682a32267f755152b9ee6758f5a6a9921d394240108cffca455542b24->enter($__internal_2922a47682a32267f755152b9ee6758f5a6a9921d394240108cffca455542b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_aa7682a89497817ea4502cdf0377f88703681f835b8572da41bf6df9110d20ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7682a89497817ea4502cdf0377f88703681f835b8572da41bf6df9110d20ba->enter($__internal_aa7682a89497817ea4502cdf0377f88703681f835b8572da41bf6df9110d20ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2922a47682a32267f755152b9ee6758f5a6a9921d394240108cffca455542b24->leave($__internal_2922a47682a32267f755152b9ee6758f5a6a9921d394240108cffca455542b24_prof);

        
        $__internal_aa7682a89497817ea4502cdf0377f88703681f835b8572da41bf6df9110d20ba->leave($__internal_aa7682a89497817ea4502cdf0377f88703681f835b8572da41bf6df9110d20ba_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabb6b29b6d0079c8c46cab9064c0a1b9d647d5fb19858c81fdb55d8e2d158d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabb6b29b6d0079c8c46cab9064c0a1b9d647d5fb19858c81fdb55d8e2d158d0->enter($__internal_dabb6b29b6d0079c8c46cab9064c0a1b9d647d5fb19858c81fdb55d8e2d158d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b83812e26791ae07e2ad9e0426cf517833adfd9ad2207a7fbf61b36d31505260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83812e26791ae07e2ad9e0426cf517833adfd9ad2207a7fbf61b36d31505260->enter($__internal_b83812e26791ae07e2ad9e0426cf517833adfd9ad2207a7fbf61b36d31505260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b83812e26791ae07e2ad9e0426cf517833adfd9ad2207a7fbf61b36d31505260->leave($__internal_b83812e26791ae07e2ad9e0426cf517833adfd9ad2207a7fbf61b36d31505260_prof);

        
        $__internal_dabb6b29b6d0079c8c46cab9064c0a1b9d647d5fb19858c81fdb55d8e2d158d0->leave($__internal_dabb6b29b6d0079c8c46cab9064c0a1b9d647d5fb19858c81fdb55d8e2d158d0_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fcd940f7b07ab3e15efdfd3fa71e95c5928b7582f244263c52571e5bb3b0291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcd940f7b07ab3e15efdfd3fa71e95c5928b7582f244263c52571e5bb3b0291->enter($__internal_5fcd940f7b07ab3e15efdfd3fa71e95c5928b7582f244263c52571e5bb3b0291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_18448e982ed76001a8ddf7cc1df0888f2cea9f255b994e09ab9fc875b10bbc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18448e982ed76001a8ddf7cc1df0888f2cea9f255b994e09ab9fc875b10bbc72->enter($__internal_18448e982ed76001a8ddf7cc1df0888f2cea9f255b994e09ab9fc875b10bbc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_18448e982ed76001a8ddf7cc1df0888f2cea9f255b994e09ab9fc875b10bbc72->leave($__internal_18448e982ed76001a8ddf7cc1df0888f2cea9f255b994e09ab9fc875b10bbc72_prof);

        
        $__internal_5fcd940f7b07ab3e15efdfd3fa71e95c5928b7582f244263c52571e5bb3b0291->leave($__internal_5fcd940f7b07ab3e15efdfd3fa71e95c5928b7582f244263c52571e5bb3b0291_prof);

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
